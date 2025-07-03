# market-example
In this project we created single end-point
/api/prices with one optional param "currency" which can have one of the following values:
RUB, USD, EUR

The method above returns list of goods in JSON format, ex.:
{
id : 1, 
title : "Bicycle", 
price : "1000"
}

if currency param exists the method returns conversion of price
for RUB = 1;
for USD = 90;
for EUR = 100;

with its modified format as below: 
$1.50, 
€2.00, 
1 200 ₽

Sample list of goods presents in /storage/goods_list.json
