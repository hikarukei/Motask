<!-- Form Post Project -->
<form action="{{ $action=='create'? url('project/create'):url('project/edit') }}" method="POST">
	{{ csrf_field() }}
	<div class="form-group">
		<input type="hidden" name="id" value="{{isset($project->id)? $project->id:''}}">
		<div class="row row-from">
			<div class="col-md-6">
				<input type="string" class="form-control motask-input" name="project_owner" value='{{isset($project->project_owner)? $project->project_owner:""}}' placeholder="Project Owner*">
			</div>
			<div class="col-md-6">
				<select class="form-control motask-input" name="category" required>
					<option selected disabled>Category*</option>
					<option value="Website" {{isset($project->category) && $project->category=='Website'? 'selected':''}}>Website</option>
					<option value="Mobile" {{isset($project->category) && $project->category=='Mobile'? 'selected':''}}>Mobile</option>
					<option value="Desktop" {{isset($project->category) && $project->category=='Desktop'? 'selected':''}}>Desktop</option>
					<option value="Other" {{isset($project->category) && $project->category=='Others'? 'selected':''}}>Others</option>
				</select>
			</div>
		</div>
		<div class="row row-form">
			<div class="col-md-12">
				<input type="text" class="form-control motask-input" name="title" value='{{isset($project->title)? $project->title:""}}' required placeholder="Title Project*">
			</div>
		</div>
		<div class="row row-form">
			<div class="col-md-6">
				<input type="date" class="form-control motask-input" name="deadline" value='{{isset($project->deadline)? $project->deadline:""}}' required>
			</div>
			<div class="col-md-6">
				<div class="input-group motask-input">
					<span class="input-group-addon" id="budget-input">Rp.</span>
					<input type="number" class="form-control motask-input" name="budget" aria-describedby="budget-input" value='{{isset($project->budget)? $project->budget:""}}' placeholder="Budget">
				</div>
			</div>
		</div>
		<div class="row row-form">
			<div class="col-md-6">
				<input type="number" class="form-control motask-input" name="number_of_programmers" min="1" max="5" value='{{isset($project->total_programmer)? $project->total_programmer:""}}' required placeholder="Programmers*">
			</div>
			<div class="col-md-6">
				<select class="form-control motask-input" name="status" required>
					<option selected disabled>Status*</option>
					<option value="Open" {{isset($project->status) && $project->status=='Open'? 'selected':''}}>Open</option>
					<option value="On_Progress" {{isset($project->status) && $project->status=='On_Progress'? 'selected':''}}>On Progress</option>
					<option value="Closed" {{isset($project->status) && $project->status=='Closed'? 'selected':''}}>Closed</option>
				</select>
			</div>
		</div>
		<div class="row row-form">
			<div class="col-md-12">
				<input type="text" class="form-control motask-input" name="specification_url" value='{{isset($project->specification_url)? $project->specification_url:""}}' required placeholder="Spesification URL*">
			</div>
		</div>
		<center><button type="submit" class="btn btn-primary transparent motask-button btn-lg">
			<i class="fa fa-paper-plane" aria-hidden="true"></i> {{$action=='create'? 'Post Project':'Update Project'}}
		</button></center>
	</div>
</form>