<?php

namespace Api\Engine;

class IMC
{
    private static string $genero;
    private static int $peso;
    private static float $altura;
    private static string $idioma;


    public function __construct(string $genero, int $peso, float $altura, string $idioma)
    {
        self::$genero = $genero;
        self::$peso = $peso;
        self::$altura = $altura;
        self::$idioma = $idioma;
    }

    public function faixas(float $imc)
    {
        $faixas_br = [
            [16, 'Muito abaixo do peso'],
            [17, 'Moderadamente abaixo do peso'],
            [18.5, 'Abaixo do peso'],
            [25, 'Saudável'],
            [30, 'Sobrepeso'],
            [35, 'Obesidade grau I'],
            [40, 'Obesidade grau II'],
            [99.99, 'Obesidade grau III']
        ];

        $faixas_en = [
            [16, 'Very underweight'],
            [17, 'Moderately underweight'],
            [18.5, 'Underweight'],
            [25, 'Normal'],
            [30, 'Overweight '],
            [35, 'Obese I degree'],
            [40, 'Obese II degree'],
            [99.99, 'Obese III degree']
        ];

        if (self::$idioma == 'br') {
            for ($i = 0; $i < sizeof($faixas_br); $i++) {
                if ($imc < $faixas_br[$i][0]) {
                    return $faixas_br[$i][1];
                }
            }
        } else {
            for ($i = 0; $i < sizeof($faixas_en); $i++) {
                if ($imc < $faixas_en[$i][0]) {
                    return $faixas_en[$i][1];
                }
            }
        }
    }

    public function getImc()
    {
        // read json file
        $data = file_get_contents('../data/data.json');

        // decode json
        $json_arr = json_decode($data, true);

        // add data
        $json_arr[] = ['genero' => self::$genero, 'peso' => self::$peso, 'altura' => self::$altura];

        // encode json and save to file
        file_put_contents('../data/data.json', json_encode($json_arr, JSON_PRETTY_PRINT));

        # Calcula o IMC
        $imc = number_format(self::$peso / pow(self::$altura, 2), 2);

        return json_encode(['language' => self::$idioma, 'imc' => $imc, 'status' => self::faixas($imc)]);
    }
}