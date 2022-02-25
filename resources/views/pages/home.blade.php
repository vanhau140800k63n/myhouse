@extends('layouts.master')
@section('content')
<div class="flex h-[200px]">
	@foreach($members as $key)
	<div class="relative w-3/12 m-[15px] cursor-pointer shake">
		<div class="bg-[{{$key->color}}] rounded-[5px] shadow-xl h-full px-[6px] text-white font-bold"> {{$key->name}} </div>
		<div class="absolute bottom-0 h-[40px] rounded-[5px] bg-[#00000030] w-full text-white font-bold text-center pt-[6px]">
			{{$key->total_amount}}
		</div>
	</div>
	@endforeach
</div>
<div class="flex flex-col"> 
	<div class="bg-[#17a2b8] m-[15px] rounded-[5px] shadow-xl h-[20px]"> DUNG </div>
	<div class="flex">
		<input type="text" name="" class="h-[40px] w-3/12 m-[15px] border-2 border-zinc-500 rounded-[5px] px-[10px]">
		<input type="number" name="" class="h-[40px] w-3/12 m-[15px] border-2 border-zinc-500 rounded-[5px] px-[10px]">
	</div>
	<div class="flex">
		<div class="w-3/12 bg-[#28a745] m-[15px] rounded-[5px] shadow-xl h-[40px] shake"> HƯƠNG </div>
		<div class="w-3/12 bg-[#ffc107] m-[15px] rounded-[5px] shadow-xl h-[40px] shake"> HẬU </div>
		<div class="w-3/12 bg-[#dc3545] m-[15px] rounded-[5px] shadow-xl h-[40px] shake"> HUYỀN </div>
	</div>
</div>
<style type="text/css">
	.shake:hover {
		animation: shake 1s; 
		animation-iteration-count: infinite; 
	}

	@keyframes shake {
		0% { transform: translate(1px, 1px) rotate(0deg); }
		10% { transform: translate(-1px, -2px) rotate(-1deg); }
		20% { transform: translate(-3px, 0px) rotate(1deg); }
		30% { transform: translate(3px, 2px) rotate(0deg); }
		40% { transform: translate(1px, -1px) rotate(1deg); }
		50% { transform: translate(-1px, 2px) rotate(-1deg); }
		60% { transform: translate(-3px, 1px) rotate(0deg); }
		70% { transform: translate(3px, 1px) rotate(-1deg); }
		80% { transform: translate(-1px, -1px) rotate(1deg); }
		90% { transform: translate(1px, 2px) rotate(0deg); }
		100% { transform: translate(1px, -2px) rotate(-1deg); }
	}

	input::-webkit-outer-spin-button,
	input::-webkit-inner-spin-button {
		-webkit-appearance: none;
		margin: 0;
	}
	
	input[type=number] {
		-moz-appearance: textfield;
	}
</style>
@endsection