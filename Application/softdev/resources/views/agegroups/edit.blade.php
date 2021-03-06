@extends('layouts.app')
	@section('content')
	<div class="row")> 
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-default"> 
				<div class="panel-heading"> 
				Edit Affected Population Age groups 
				</div>
				<div class="panel-body">
					<form action="{{route('agegroups.update', $agegroup->id)}}" method="POST">
					<input type="hidden" name="_method" value="PATCH">
					{{ csrf_field() }}
					<div class="form-group"> 
						<label for="toddler_kid">Toddlers and kids (11 yrs old and below):
						</label>
						<input type="number" name="toddler_kid" class="form-control" value="	{{$agegroup->toddler_kid}}">
					</div>

					<div class="form-group"> 
						<label for="teen">Teenagers (12 to 18 yrs old):</label>

						<input type="number" name="teen" class="form-control" value="	{{$agegroup->teen}}">
					</div>

					<div class="form-group"> 
						<label for="older">Older people (19 to 50 yrs old):</label>
						<input type="number" name="older" class="form-control" value="	{{$agegroup->older}}">
					</div>

					<div class="form-group"> 
						<label for="seniorcitizen"> Senior Citizens (60 yrs old and above):</label>
						<input type="number" name="seniorcitizen" class="form-control" value="	{{$agegroup->seniorcitizen}}">
					</div>

					<input type="submit" class="btn btn-success pull-right">
					</form>
				</div>
			</div>
		</div>
	</div>




	@endsection