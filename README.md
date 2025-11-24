# PROGRAMMER TEST

Instruksi : Silahkan jawab pertanyaan di bawah ini sesuai dengan logika dan
syntaks yang anda tahu

1. Terdapat ilustrasi model data di database dengan skema sebagai berikut :

**Country**

```
1 Indonesia
```
```
2 Malaysia
```
```
3 Singapura
```
**City**

```
1 1 Jakarta 1000
```
```
2 1 Bandung 400
```
```
3 1 Medan 200
```
```
4 2 Kuala Lumpur 600
```
```
5 2 Penang 300
```
```
6 2 Johor Bahru 200
```
```
7 3 Singapura 400
```
**Building**

```
1 1 Bidakara 30
```
```
2 1 Mulia Tower 40
```
```
3 2 Cihampelas Apart 20
```
```
4 4 Petronas 70
```
```
5 5 Standard Chartered 35
```
```
6 7 Marina Bays 50
```
```
7 7 Allianz Tower 60
```

Tuliskan query dan output untuk logika berikut :

```
a) Munculkan kota yang populasi penduduknya lebih dari 500 dan output dari
query tersebut
b) Munculkan kota yang tidak mempunyai gedung dan output dari query
tersebut
c) Munculkan negara yang mempunyai kota dengan populasi kurang dari 500
dan output dari query tersebut
d) Munculkan gedung yang terdapat di negara Indonesia dan Malaysia dan
output dari query tersebut
e) Munculkan gedung yang terdapat di negara Indonesia dan Malaysia serta
mempunyai tinggi lebih dari 40 lantai dan output dari query tersebut
```
2. Buatlah coding pemrograman dengan menggunakan logical (For/While/Do
    While) untuk memunculkan ouput sebagai berikut :

```
a. *
**
***
****
*****
```
```
b. 5 4 3 2 1
5 4 3 2
5 4 3
5 4
5
```
```
c. 1
1 3
1 3 5
1 3 5 7
1 3 5 7 9
```
```
d. 3 2 1
3 2
3
3 2
3 2 1
```
```
e. 2 3 5 7 11
```
3. Lampirkan project aplikasi yang pernah anda kerjakan. (berupa screenshot
    atau dummy aplikasi yg bisa diakses).

### SELAMAT MENGERJAKAN, SEMOGA SUKSES!


## Jawab

1. a) Munculkan kota yang populasi penduduknya lebih dari 500 dan output dari
    query tersebut

SELECT name AS city, population

FROM City

WHERE population > 500;

1. b) Munculkan kota yang tidak mempunyai gedung dan output dari query
    tersebut

SELECT city.id, city.name AS kota, city.population

FROM city

LEFT JOIN building ON city.id = building.city_id

WHERE building.id IS NULL;

1. c) Munculkan negara yang mempunyai kota dengan populasi kurang dari 500
    dan output dari query tersebut

SELECT DISTINCT country.id, country.name AS country

FROM country

JOIN city ON country.id = city.country_id

WHERE city.population < 500;


1. d) Munculkan gedung yang terdapat di negara Indonesia dan Malaysia dan
    output dari query tersebut

SELECT building.id, building.name AS building, city.name AS city, country.name
AS country, building.floor

FROM building

JOIN city ON building.city_id = city.id

JOIN country ON city.country_id = country.id

WHERE country.name IN ('Indonesia','Malaysia');

1. e) Munculkan gedung yang terdapat di negara Indonesia dan Malaysia serta
    mempunyai tinggi lebih dari 40 lantai dan output dari query tersebut

SELECT building.id, building.name AS building, city.name AS city, country.name
AS country, building.floor

FROM building

JOIN city ON building.city_id = city.id

JOIN country ON city.country_id = country.id

WHERE country.name IN ('Indonesia','Malaysia') AND building.floor > 40;

2. a)

<?php

for ($i= 1 ; $i <= 5 ; $i++) {

for ($j= 1 ; $j <= $i; $j++) {

echo "*";

}

echo "<br>";

}

?>


2. b)

<?php

for ($i= 5 ; $i >= 1 ; $i--) {

for ($j= 5 ; $j >= 6 - $i; $j--) {

echo $j. " ";

}

echo "<br>";

}

?>

2. c)

<?php

for ($i = 1 ; $i <= 9 ; $i += 2 ) {

for ($j = 1 ; $j <= $i; $j += 2 ) {

echo $j. " ";

}

echo "<br>";

}

?>

2. d)

<?php

for ($i = 3 ; $i >= 1 ; $i--) {

for ($j = 3 ; $j >= 4 - $i; $j--) {

echo $j. " ";

}

echo "<br>";

}

for ($i = 2 ; $i <= 3 ; $i++) {

for ($j = 3 ; $j >= 4 - $i; $j--) {

echo $j. " ";

}

echo "<br>";

}

?>


2. e)

<?php

$count = 0 ;

$num = 2 ;

while ($count < 5 ) {

$prima = true;

for ($i= 2 ; $i <= sqrt($num); $i++) {

if ($num % $i == 0 ) {

$prima = false;

break;

}

}

if ($prima) {

echo $num. " ";

$count++;

}

$num++;

}

?>

3. https://auliya.id/portofolio

Portfolio juga saya lampirkan pada file pdf terpisah


