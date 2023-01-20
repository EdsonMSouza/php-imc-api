<?php

namespace Api;

use Api\Engine\IMC;

include '../vendor/autoload.php';
include '../src/Helpers/headers.php';

try {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $err = [];
        $data = null;
        try {
            $data = json_decode(file_get_contents('php://input'));
            $args = json_decode(file_get_contents('php://input'), true);

            if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
                echo json_encode(['message' => 'Payload Precondition Failed']);
                die();
            }

            if (sizeof($args) != 3) {
                echo json_encode(['message' => 'Invalid Arguments Number (Expected Four)']);
                die();
            }

            # verify if fields exist
            (!isset($data->peso) ? array_push($err, 1) : null);
            (!isset($data->altura) ? array_push($err, 1) : null);
            (!isset($data->idioma) ? array_push($err, 1) : null);

            if (sizeof($err) > 0) {
                echo json_encode(['message' => 'Payload Precondition Failed']);
                die();
            }
        } catch (\Exception $ex) {
            echo json_encode(['message' => 'Bad Request (Invalid Syntax)']);
        }

        try {
            # Load classes
            try {
                $imc = new IMC(strip_tags($data->peso), strip_tags($data->altura), strip_tags($data->idioma));
                echo $imc->getImc();
            } catch (\Exception $ex) {
                echo json_encode(['message' => $ex->getMessage()]);
                die();
            }

        } catch (\Exception $ex) {
            echo json_encode(['message' => $ex->getMessage()]);
            die();
        }

    } else {
        echo json_encode(['message' => 'Method Not Allowed']);
        die();
    }
} catch (\Exception $ex) {
    echo json_encode(['message' => $ex->getMessage()]);
    die();
}