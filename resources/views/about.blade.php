@extends ('layouts.app')

@section('content')
<div class="row about">
<div>
	Please tell us a little about yourself
	<form id="agree-form" method="post" class="form-inline" action="aboutinsert">
        {{ csrf_field() }}
        <div class="form-group col-sm-12">	
          <label for="age">What is your age? Please enter your current age with a number.</label><br />
          <input type="text" id="age" name="age" required="required"><br />
      </div>
      <div class="form-group col-sm-12">
          <b>What is your gender? Please select one of the options.</b><br />
          <input type="radio" id="Female" name="gender" class="form-control" value="Female" required="required"><label for="Female">Female</label><br />
          <input type="radio" id="Male" name="gender" class="form-control" value="Male" required="required"><label for="Male">Male</label><br />
          <input type="radio" id="Other" name="gender" class="form-control" value="Other" checked="checked" required="required"><label for="Other" style="text-decoration: none;">Other/Prefer not to tell</label><br />
      </div>
      <div class="form-group col-sm-12">
          <label for="education">What is your level of education? Please select your current highest completed level of education.</label><br />
          <input type="radio" id="education" name="education" class="form-control" value="Less than high school" checked="checked">Less than high school<br />
          <input type="radio" id="education" name="education" class="form-control" value="High school">High school<br />
          <input type="radio" id="education" name="education" class="form-control" value="Bachelor’s degree">Bachelor’s degree<br />
          <input type="radio" id="education" name="education" class="form-control" value="Master’s degree">Master’s degree<br />
          <input type="radio" id="education" name="education" class="form-control" value="Beyond Master’s degree (PhD or equivalent)">Beyond Master’s degree (PhD or equivalent)<br />
      </div>
      <div class="form-group col-sm-12">
          <label for="ethnicity">Please specify your ethnicity.</label><br />
          <input type="radio" id="ethnicity" name="ethnicity" class="form-control" value="White">White<br />
          <input type="radio" id="ethnicity" name="ethnicity" class="form-control" value="Hispanic or Latino">Hispanic or Latino<br />
          <input type="radio" id="ethnicity" name="ethnicity" class="form-control" value="Black or African American">Black or African American<br />
          <input type="radio" id="ethnicity" name="ethnicity" class="form-control" value="Native American or American Indian">Native American or American Indian<br />
          <input type="radio" id="ethnicity" name="ethnicity" class="form-control" value="Asian / Pacific Islander">Asian / Pacific Islander<br />
          <input type="radio" id="ethnicity" name="ethnicity" class="form-control" value="Other" checked="checked">Other<br />
      </div>
      <div class="form-group col-sm-12">
          <label for="employment">Please select your current employment status from the following options.</label><br />
          <input type="radio" id="employment" name="employment" class="form-control" value="Employed for wages" required="required">Employed for wages<br />
          <input type="radio" id="employment" name="employment" class="form-control" value="Self-employed" required="required">Self-employed<br />
          <input type="radio" id="employment" name="employment" class="form-control" value="Out of work and looking for work" required="required">Out of work and looking for work<br />
          <input type="radio" id="employment" name="employment" class="form-control" value="Out of work but not currently looking for work" required="required">Out of work but not currently looking for work<br />
          <input type="radio" id="employment" name="employment" class="form-control" value="A homemaker" required="required">A homemaker<br />
          <input type="radio" id="employment" name="employment" class="form-control" value="A student" required="required">A student<br />
          <input type="radio" id="employment" name="employment" class="form-control" value="Military" required="required">Military<br />
          <input type="radio" id="employment" name="employment" class="form-control" value="Retired" required="required">Retired<br />
          <input type="radio" id="employment" name="employment" class="form-control" value="Unable to work" required="required">Unable to work<br />
      </div>
      <div class="form-group col-sm-12">
          <label for="lang">Is English your native language?</label><br />
          <input type="radio" id="lang" name="lang" class="form-control" value="yes" required="required">Yes<br />
          <input type="radio" id="lang" name="lang" class="form-control" value="no" required="required">No<br />
      </div>
      <button type="submit" id="send-btn">Continue</button>
  </form> 

</div>
</div>
@endsection