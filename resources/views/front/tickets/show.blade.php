@extends('layouts.front')
@section('content')

<style>
    @media print {

        body,
        .wrapper {
            width: auto !important;
            height: auto !important;
            overflow: hidden !important;
            background: transparent !important;
        }

        .bg {
            background: none !important;
        }

        .logo {
            position: relative !important;
            width: 25% !important;
            display: block !important;
            margin: 0 auto !important;
            margin-bottom: 5% !important;
            top: 5% !important;
        }

        #ticket {
            background: none !important;
            color: #000 !important;
            border: 6px dashed #000 !important;
            position: relative !important;
            top: auto !important;
            bottom: auto !important;
            left: auto !important;
            right: auto !important;
            width: auto !important;
            height: auto !important;
            padding: 12% 0 !important;
        }

        #ticket p {
            font-size: 5vw !important;
            margin-top: 0 !important;
        }

        #ticket h2 {
            font-size: 50vw !important;
        }
    }
</style>

<div class="wrapper" style="">

    <div class="bg" style="background: url(/img/1.jpg) top center; background-size: cover;"></div>

    <div class="logo"><img src="/img/logo.png" alt=""></div>

    <div class="ticket" id="ticket" style="background: url(/img/ticket.svg) center center; background-size: contain; background-repeat: no-repeat; position: absolute; top: 300px; left: 0; right: 0; width: 450px; height: 600px; margin: 0 auto; color: #fff; text-align: center;">

    <p style="text-transform: uppercase; font-size: 30px; font-weight: bold; line-height: 1; margin: 0; margin-top: 60px;">Номер билета</p>
    <h2 style="font-size: 300px; display: block; line-height: 1; margin: 0; margin-top: 10px; margin-bottom: -30px;">{{ $tk->number }}</h2>

    <p style="text-transform: uppercase; font-size: 30px; font-weight: bold; line-height: 1; margin: 0; margin-top: 20px;">{{ $tk->schedule->show->title }} <small style="display: block; line-height: 1.5; font-size: 18px; margin-top: 15px;">АРТ-ГРУППА AES+F<br> ВОЗРАСТНОЕ ОГРАНИЧЕНИЕ 18+</small></p>
    <p style="text-transform: uppercase; font-size: 30px; font-weight: bold; line-height: 1; margin: 0; margin-top: 30px;">{{ Carbon\Carbon::parse($tk->date)->locale('ru')->isoFormat('D.M.YYYY') }} {{ $tk->schedule->time }}</p>
    </div>

    <input type='button' id='btn' value='Печать' onclick="window.print()" class="btn-standard" style="position: absolute; z-index: 20; display:none;">
</div>

    <script>
         setTimeout(function(){
            window.print();
         }, 2000);
      </script>

    <script>
         setTimeout(function(){
            window.location.href = 'http://localhost/';
         }, 5000);
      </script>

@endsection