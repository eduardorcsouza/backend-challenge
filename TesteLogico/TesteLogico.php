<?php


class TesteLogico
{
    /**
     * Array recebido para soma
     * @var array
     */
    private array $array = [];

    /**
     * SResultado  oma na diagonal
     * @var int
     */
    private int $diagonalSumResult = 0;

    /**
     * Resultado Soma na diagonal invertida
     * @var int
     */
    private int $invertedDiagonalSumResult = 0;

    public function __construct(array $array)
    {
        $this->array = $array;
    }

    public function diagonalDiference():int
    {
        $this->diagonalSums();
        return $this->diagonalSumResult-$this->invertedDiagonalSumResult;
    }


    /**
     * Seta Soma na diagonal
     */
    private function diagonalSums()
    {
        $column = 0;
        $arrayLines = count($this->array);

        //eu posso declarar as colunas com a mesma quantidade pois é uma matriz quadrada
        //e remove-se um pois se trata do ídice da matriz
        $invertedColumn = $arrayLines-1;

        for ($currentLine = 0; $arrayLines > $currentLine; $currentLine++) {
            $this->diagonalSumResult += $this->array[$currentLine][$column];
            $this->invertedDiagonalSumResult += $this->array[$currentLine][$invertedColumn];
            $column++;
            $invertedColumn--;
        }
    }


}