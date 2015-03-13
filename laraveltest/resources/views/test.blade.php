@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					You are logged in!
					<?
					if (Cache::has('key'))
					{
						echo Cache::get('key');
					}
					else{
						echo '<p>NoKey</p>';
					}
					?>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
