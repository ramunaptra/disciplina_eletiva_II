@extends('template.template')
@section('title')
    Laravel - Exercicio 1
@endsection
@section('body')
<div class="container">
<<<<<<< HEAD
     <div class="row control">
        <p>Faça um programa que receba um valor pago, um segundo valor que é o preço do produto e retorne o troco a ser dado.</p>
     </div>
    <form action="/ex1/calc/" method="get">
        <label for="n1"></label>
        <input type="text" id="n1" name="n1">

        <label for="n2"></label>
        <input type="text" id="n2" name="n2">

        <button>Calcular</button>
    </form>
=======
    <br>
     <div class="row control">
        <p>Faça um programa que receba um valor pago, um segundo valor que é o preço do produto e retorne o troco a ser dado.</p>
     </div>
    <br>
    <form action="/ex1/calc/" method="post">
        @csrf
        <div class="row">
            <div class="col ">

                <input type="number" class="form-control" id="n2" name="n2" required>
                <label for="n2">Valor do produto</label>
            </div>
            <div class="col">

                <input type="number" class="form-control" id="n1" name="n1" required >
                <label for="n1">Valor pago</label>

            </div>
            <div class="col">
                <button class="btn btn-primary" >Calcular</button>
            </div>
        </div>
    </form>
    <br>
    <?php
        if(isset($message)){

            echo "<h1>".$message."</h1>";
        }
        if(isset($def)){
            echo $def;
        }
    ?>
>>>>>>> de93fb73d462b3086cb8bc266279df76860aa9e8

</div>


@endsection
