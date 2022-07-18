# PHP IMC API v.1.0

<code><img height="50" src="https://raw.githubusercontent.com/github/explore/80688e429a7d4ef2fca1e82350fe8e3517d3494d/topics/php/php.png"></code>
<code><img height="50" src="https://raw.githubusercontent.com/github/explore/80688e429a7d4ef2fca1e82350fe8e3517d3494d/topics/json/json.png"></code>

Esta API fornece, de forma simples, um serviço que calcula o IMC (Índice de Massa Corporal) de uma pessoa. Além do recurso disponível, é uma ótima oportunidade de estudo para quem está aprendendo a desenvolver APIs.

```html
PHP 7.4.3 (cli) (built: Jun  13 2022 13:43:30) ( NTS )
Copyright (c) The PHP Group Zend Engine v3.4.0, 
Copyright (c) Zend Technologies with Zend OPcache v7.4.3, 
Copyright (c), by Zend Technologies
```

## Como usar esse conteúdo?

Este conteúdo é livre para uso e distribuição sob a licença (CC BY-SA 4.0).

Se quiser colaborar neste repositório com quaisquer melhorias que você tenha feito, basta fazer um _fork_ e enviar um PR.

## Composer

Mudanças devem ser atualizadas via <code>composer dump-autoload -o</code> no ambiente de desenvolvimento.

# Como usar

---
| Resource |      URI      |  Method  |
|:--------:|:-------------:|:--------:|
| **API**  | `http://URI/api/` | **POST** |

_**payload**_

```json
{
  "genero": "masculino, feminino ou outros",
  "peso": "94",
  "altura": "1.80",
  "idioma": "br ou en"  
}
```
### Teste Online

A API pode ser testada no endereço abaixo com os dados sugeridos.

- URI: [http://emsapi.esy.es/imcapi/api](http://emsapi.esy.es/imcapi/api/)

--- 

```json
{
  "genero": "masculino",
  "peso": "94",
  "altura": "1.80",
  "idioma": "br"  
}
```
_**Success**_

```json
{
  "language": "br",
  "imc": "29.01",
  "status": "Sobrepeso"
}
```

_**Warnings**_

```json
{
  "message": "Payload Precondition Failed" or
  "message": "Invalid Arguments Number (Expected Four)" or
  "message": "Bad Request (Invalid Syntax)" or  
  "message": "Method Not Allowed"
}
```

### Como citar este conteúdo

```
SOUZA, Edson (2022, Jul 18). PHP IMC API v.1.0.
Available in: https://github.com/EdsonMSouza/php-imc-api
```

Ou BibTeX for LaTeX:

```latex
@misc{SOUZA2022IMCAPI,
  author = {SOUZA, Edson},
  title = {PHP IMC API v.1.0},
  url = {https://github.com/EdsonMSouza/php-imc-api},
  year = {2022},
  month = {July}
}
```

### Licença

[![CC BY-SA 4.0][cc-by-sa-shield]][cc-by-sa]

Este trabalho é licenciado sob a
[Creative Commons Attribution-ShareAlike 4.0 International License][cc-by-sa].

[![CC BY-SA 4.0][cc-by-sa-image]][cc-by-sa]

[cc-by-sa]: http://creativecommons.org/licenses/by-sa/4.0/

[cc-by-sa-image]: https://licensebuttons.net/l/by-sa/4.0/88x31.png

[cc-by-sa-shield]: https://img.shields.io/badge/License-CC%20BY--SA%204.0-lightgrey.svg