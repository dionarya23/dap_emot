# Dap_emot PHP Library Emoticons
[![capture-20161229-211321.png](https://s24.postimg.org/3l9f34hj9/capture_20161229_211321.png)](https://postimg.org/image/7ue55aksh/)<br />
Sebuah Library Php Untuk mengeluarkan sistem emoticon terdapat 25 emoticon, masih dalam tahap beta (uji coba)
Terinspirasi dari Parsedown PHP,
<br />
Create By : Dion Arya Pamungkas <br />
http://dionarya6661.github.io <br />
@DionArya_P on twitter <br />

## Cara Memakai

Silahkan Letakan Dap_emot.php di folder yang dibutuhkan lalu :
```
$Dap_emot = new Dap_emot();
echo $Dap_emot->emot('Tulisan Terdapat Emoticons :D :( :)');
Ouput -> Tulisan Terdapat Emoticons 😃 😟 🙂
```

## Menjadikan sebagai library Codeigneter
Dap_emot juga bisa dijadikan sebagai library framework php codeigneter<br/>
Caranya: <br/>
* Pertama silahkan download terlebih dahulu dap_emot.php
* Kedua taruh dalam folder application/library
* Dan yang terakhir panggil library tersebut kedalam sebuah controller

```
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('dap_emot');
	}

//Untuk Output
echo $this->dap_emot->emot('Tulisan Terdapat Emoticons :D :( :)');

//atau
$text     = 'Tulisan Terdapat Emoticons :D :( :)';
$textBaru = $this->dap_emot->emot('Tulisan Terdapat Emoticon :D :( :)');
echo $textBaru;

```

## Kelebihan

* Emoticon berbentuk gambar langsung tanpa tag html <img
* Cepat
* Mudah Digunakan
* Bisa dikombinasikan langsung dengan Parsedown

## Library Kode Emotikon Terdapat 25 Emoticons

<table>

<tbody>

<tr>

<th>Kode</th>

<th>Nama</th>

<th>Hasil</th>

</tr>

<tr>

<td>:)</td>

<td>happy</td>

<td>🙂</td>

</tr>

<tr>

<td>:(</td>

<td>sad</td>

<td>😟</td>

</tr>

<tr>

<td>:P</td>

<td>tongue</td>

<td>😛</td>

</tr>

<tr>

<td>:D</td>

<td>grin</td>

<td>😃</td>

</tr>

<tr>

<td>:O</td>

<td>wink</td>

<td>😮</td>

</tr>

<tr>

<td>;)</td>

<td>kedip mata</td>

<td>😜</td>

</tr>

<tr>

<td>B)</td>

<td>glasses</td>

<td>👓</td>

</tr>

<tr>

<td>B|</td>

<td>subglasses</td>

<td>😎</td>

</tr>

<tr>

<td>>:(</td>

<td>grumpy</td>

<td>😡</td>

</tr>

<tr>

<td>:/</td>

<td>unsure</td>

<td>😐</td>

</tr>

<tr>

<td>:'(</td>

<td>cry</td>

<td>😢</td>

</tr>

<tr>

<td>#:)</td>

<td>devil</td>

<td>😈</td>

</tr>

<tr>

<td>O:)</td>

<td>angel</td>

<td>😇</td>

</tr>

<tr>

<td>:*</td>

<td>kiss</td>

<td>😘</td>

</tr>

<tr>

<td><3</td>

<td>heart</td>

<td>💓</td>

</tr>

<tr>

<td>^_^</td>

<td>kiki</td>

<td>😊</td>

</tr>

<tr>

<td>-_-</td>

<td>squint</td>

<td>😑</td>

</tr>

<tr>

<td>o.O</td>

<td>confused</td>

<td>😕</td>

</tr>

<tr>

<td>>:O</td>

<td>upset</td>

<td>😣</td>

</tr>

<tr>

<td>:v</td>

<td>yimyam</td>


<td><img src="https://static.xx.fbcdn.net/images/emoji.php/v6/ee4/1/16/PACMAN_2.png"></td>

</tr>

<tr>

<td>:3</td>

<td>curly lips</td>

<td>👄</td>

</tr>

<tr>

<td>:|]</td>

<td>robot</td>

<td>👾</td>

</tr>

<tr>

<td>(y)</td>

<td>like</td>

<td>👍</td>

</tr>

<tr>

<td>:tai</td>

<td>poop</td>

<td>💩</td>

</tr>

<tr>

<td>(;)</td>

<td>dislike</td>

<td>👎</td>

</tr>

</tbody>

</table>
