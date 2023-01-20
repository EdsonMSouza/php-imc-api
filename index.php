<h1 id="php-imc-api-v-1-0">PHP IMC API v.1.0</h1>
<p><code><img height="50" src="https://raw.githubusercontent.com/github/explore/80688e429a7d4ef2fca1e82350fe8e3517d3494d/topics/php/php.png"></code>
    <code><img height="50" src="https://raw.githubusercontent.com/github/explore/80688e429a7d4ef2fca1e82350fe8e3517d3494d/topics/json/json.png"></code></p>
<p>Esta API fornece, de forma simples, um serviço que calcula o IMC (Índice de Massa Corporal) de uma pessoa. Além do recurso disponível, é uma ótima oportunidade de estudo para quem está aprendendo a desenvolver APIs.</p>
<p><strong>ATENÇÃO</strong>: A cada requisição são registrados os dados sobre <em>peso</em> e <em>altura</em> em um arquivo JSON no diretório <code>data</code>, apenas para estatísticas futuras. Os dados mantidos não permitem a identificação de uma <strong>pessoa</strong>.</p>
<pre><code class="lang-html"><span class="hljs-selector-tag">PHP</span> 7<span class="hljs-selector-class">.4</span><span class="hljs-selector-class">.3</span> (<span class="hljs-selector-tag">cli</span>) (<span class="hljs-selector-tag">built</span>: <span class="hljs-selector-tag">Jun</span>  13 2022 13<span class="hljs-selector-pseudo">:43</span><span class="hljs-selector-pseudo">:30)</span> ( <span class="hljs-selector-tag">NTS</span> )
<span class="hljs-selector-tag">Copyright</span> (<span class="hljs-selector-tag">c</span>) <span class="hljs-selector-tag">The</span> <span class="hljs-selector-tag">PHP</span> <span class="hljs-selector-tag">Group</span> <span class="hljs-selector-tag">Zend</span> <span class="hljs-selector-tag">Engine</span> <span class="hljs-selector-tag">v3</span><span class="hljs-selector-class">.4</span><span class="hljs-selector-class">.0</span>,
<span class="hljs-selector-tag">Copyright</span> (<span class="hljs-selector-tag">c</span>) <span class="hljs-selector-tag">Zend</span> <span class="hljs-selector-tag">Technologies</span> <span class="hljs-selector-tag">with</span> <span class="hljs-selector-tag">Zend</span> <span class="hljs-selector-tag">OPcache</span> <span class="hljs-selector-tag">v7</span><span class="hljs-selector-class">.4</span><span class="hljs-selector-class">.3</span>,
<span class="hljs-selector-tag">Copyright</span> (<span class="hljs-selector-tag">c</span>), <span class="hljs-selector-tag">by</span> <span class="hljs-selector-tag">Zend</span> <span class="hljs-selector-tag">Technologies</span>
</code></pre>
<h3 id="como-usar-esse-conte-do-">Como usar esse conteúdo?</h3>
<p>Este conteúdo é livre para uso e distribuição sob a licença (CC BY-SA 4.0).</p>
<p>Se quiser colaborar neste repositório com quaisquer melhorias que você tenha feito, basta fazer um <em>fork</em> e enviar um PR.</p>
<h3 id="composer">Composer</h3>
<p>Mudanças devem ser atualizadas via <code>composer dump-autoload -o</code> no ambiente de desenvolvimento.</p>
<h3 id="como-usar">Como usar</h3>
<hr>
<table>
    <thead>
    <tr>
        <th style="text-align:center">Resource</th>
        <th style="text-align:center">URI</th>
        <th style="text-align:center">Method</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td style="text-align:center"><strong>API</strong></td>
        <td style="text-align:center"><code>http://URI/api/</code></td>
        <td style="text-align:center"><strong>POST</strong></td>
    </tr>
    </tbody>
</table>
<p><em><strong>payload</strong></em></p>
<pre><code class="lang-json">{
  <span class="hljs-attr">"peso"</span>: <span class="hljs-string">"94"</span>,
  <span class="hljs-attr">"altura"</span>: <span class="hljs-string">"1.80"</span>,
  <span class="hljs-attr">"idioma"</span>: <span class="hljs-string">"br ou en"</span>
}
</code></pre>
<h3 id="teste-online">Teste Online</h3>
<p>A API pode ser testada no endereço abaixo com os dados sugeridos.</p>
<ul>
    <li>URI: <a href="https://www.edsonmelo.com.br/src/imc/api/">https://www.edsonmelo.com.br/src/imc/api/</a></li>
</ul>
<hr>
<p><em><strong>payload</strong></em></p>
<pre><code class="lang-json">{
    <span class="hljs-attr">"peso"</span>: <span class="hljs-string">"94"</span>,
  <span class="hljs-attr">"altura"</span>: <span class="hljs-string">"1.80"</span>,
  <span class="hljs-attr">"idioma"</span>: <span class="hljs-string">"br"</span>
}
</code></pre>
<p><em><strong>Success</strong></em></p>
<pre><code class="lang-json">{
  <span class="hljs-attr">"language"</span>: <span class="hljs-string">"br"</span>,
  <span class="hljs-attr">"imc"</span>: <span class="hljs-string">"29.01"</span>,
  <span class="hljs-attr">"status"</span>: <span class="hljs-string">"Sobrepeso"</span>
}
</code></pre>
<p><em><strong>Warnings</strong></em></p>
<pre><code class="lang-json">{
  <span class="hljs-string">"message"</span>: <span class="hljs-string">"Payload Precondition Failed"</span> <span class="hljs-keyword">or</span>
  <span class="hljs-string">"message"</span>: <span class="hljs-string">"Invalid Arguments Number (Expected Four)"</span> <span class="hljs-keyword">or</span>
  <span class="hljs-string">"message"</span>: <span class="hljs-string">"Bad Request (Invalid Syntax)"</span> <span class="hljs-keyword">or</span>
  <span class="hljs-string">"message"</span>: <span class="hljs-string">"Method Not Allowed"</span>
}
</code></pre>
<h3 id="como-citar-este-conte-do">Como citar este conteúdo</h3>
<pre><code>SOUZA, Edson (<span class="hljs-number">2022</span>, Jul <span class="hljs-number">18</span>). PHP IMC API v.<span class="hljs-number">1.0</span>.
Available <span class="hljs-keyword">in</span>: https:<span class="hljs-regexp">//gi</span>thub.com<span class="hljs-regexp">/EdsonMSouza/</span>php-imc-api
</code></pre><p>Ou BibTeX for LaTeX:</p>
<pre><code class="lang-latex">@misc{SOUZA2022IMCAPI,
  author = {SOUZA, Edson},
  title = {PHP IMC API v.<span class="hljs-number">1.0</span>},
  url = {https://github.com/EdsonMSouza/php-imc-api},
  year = {<span class="hljs-number">2022</span>},
  month = {July}
}
</code></pre>
<h3 id="licen-a">Licença</h3>
<p><a href="http://creativecommons.org/licenses/by-sa/4.0/"><img src="https://img.shields.io/badge/License-CC%20BY--SA%204.0-lightgrey.svg" alt="CC BY-SA 4.0"></a></p>
<p>Este trabalho é licenciado sob a
    <a href="http://creativecommons.org/licenses/by-sa/4.0/">Creative Commons Attribution-ShareAlike 4.0 International License</a>.</p>
<p><a href="http://creativecommons.org/licenses/by-sa/4.0/"><img src="https://licensebuttons.net/l/by-sa/4.0/88x31.png" alt="CC BY-SA 4.0"></a></p>
