<?php
$price = 9876;
/**
 * 価格を数値で受け取り
 * 税込み10％表示を小数点以下を切り捨てた値を返す
 *
 * @param integer $cost
 * @return integer
 */
function getTaxPrice(int $cost): int
{
    return (int) floor($cost * 1.1);
}
echo '税込価格は' . number_format(getTaxPrice($price)) . '円です。';
