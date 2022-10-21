<?php
class Funcoes
{
    /*

    Desenvolva uma função que receba como parâmetro o ano e retorne o século ao qual este ano faz parte. O primeiro século começa no ano 1 e termina no ano 100, o segundo século começa no ano 101 e termina no 200.

	Exemplos para teste:

	Ano 1905 = século 20
	Ano 1700 = século 17

     * */
    public static function SeculoAno(int $ano)
    {
        $sec = ($ano / 100) + (($ano % 100 ? 1 : $ano) % 10 ? 1 : 0);

        return "o Século é:" . round($sec);
    }



    /*

    Desenvolva uma função que receba como parâmetro um número inteiro e retorne o numero primo imediatamente anterior ao número recebido

    Exemplo para teste:

    Numero = 10 resposta = 7
    Número = 29 resposta = 23

     * */


    // PrimoAnterior(12);

    public static function PrimoAnterior($num)
    {

        $divisores = 0;
        $lista_de_primos = array();
        $primo_inferior = 0;


        for ($i = 0; $i < $num; $i++) {

            for ($x = $i; $x > 0; $x--) {

                if ($i % $x == 0) {
                    $divisores += 1;
                }
            }

            if ($divisores == 2) {
                array_push($lista_de_primos, $i);
            }

            $divisores = 0;
        }

        $primo_inferior = max($lista_de_primos);
        echo "Número primo anterior ao $num é = " . $primo_inferior;
    }










    /*

    Desenvolva uma função que receba como parâmetro um array multidimensional de números inteiros e retorne como resposta o segundo maior número.

    Exemplo para teste:

	Array multidimensional = array (
	array(25,22,18),
	array(10,15,13),
	array(24,5,2),
	array(80,17,15)
	);

	resposta = 25

     * */
    public static function SegundoMaior()
    {

        $arr = array(
            array(25, 22, 18),
            array(10, 15, 13),
            array(24, 5, 2),
            array(80, 17, 15)
        );


        $maiores = [];

        foreach ($arr as &$valor) {
            array_push($maiores, max($valor));
        }
        rsort($maiores);

        return "O segundo maior valor é:" . $maiores[1];
    }












    /*
   Desenvolva uma função que receba como parâmetro um array de números inteiros e responda com TRUE or FALSE se é possível obter uma sequencia crescente removendo apenas um elemento do array.

	Exemplos para teste 

	Obs.:-  É Importante  realizar todos os testes abaixo para garantir o funcionamento correto.
         -  Sequencias com apenas um elemento são consideradas crescentes

    [1, 3, 2, 1]  false
    [1, 3, 2]  true
    [1, 2, 1, 2]  false
    [3, 6, 5, 8, 10, 20, 15] false
    [1, 1, 2, 3, 4, 4] false
    [1, 4, 10, 4, 2] false
    [10, 1, 2, 3, 4, 5] true
    [1, 1, 1, 2, 3] false
    [0, -2, 5, 6] true
    [1, 2, 3, 4, 5, 3, 5, 6] false
    [40, 50, 60, 10, 20, 30] false
    [1, 1] true
    [1, 2, 5, 3, 5] true
    [1, 2, 5, 5, 5] false
    [10, 1, 2, 3, 4, 5, 6, 1] false
    [1, 2, 3, 4, 3, 6] true
    [1, 2, 3, 4, 99, 5, 6] true
    [123, -17, -5, 1, 2, 3, 12, 43, 45] true
    [3, 5, 67, 98, 3] true

     * */

    private static function EstaEmOrdemCrescente(array $numbers)
    {
        for ($i = 1; $i < count($numbers); $i++) {
            if ($numbers[$i - 1] >= $numbers[$i]) return false;
        }
        return true;
    }

    public static function SequenciaCrescente(array $arr)
    {


        for ($i = 0; $i < count($arr); $i++) {
            $arraySemValorAtual = $arr;
            array_splice($arraySemValorAtual, $i, 1);

            $crescente = Funcoes::EstaEmOrdemCrescente($arraySemValorAtual);
            if ($crescente) return 'true';
        }

        return  'false';
    }
}
