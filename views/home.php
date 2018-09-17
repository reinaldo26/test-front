<div class="sign-up">
    <h3>My Profile</h3>

    <span>Progress: <i id="pro"></i>%</span><br/>
    <div class="progress" style="height:5px;">
        <div class="progress-bar progress-bar-striped bg-danger width-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <p id="description">Complete 75% to apply for jobs and let companies know you're interested</p>

    <form id="sign-up-form" method="POST" action="signup/register"></form>

    <article>
        <h4>Introduction</h4>
        <p>Take brief moment to introduce yourself<br/> and increase your Profile stenght by 25%</p>
        <button class="btn btn-danger btn-intro">add</button>
    </article>

    <article>
        <h4>Experience</h4>
        <p>Add your experience to increase your<br/>Profile stenght by 25%</p>
        <button class="btn btn-danger btn-expe">add</button>
    </article>

    <article>
        <h4>Education</h4>
        <p>Add your education to increase your<br/> Profile stenght by 25%</p>
        <button class="btn btn-danger btn-edu">add</button>
    </article>

    <div class="btn-signup">
        <button type="submit" form="sign-up-form" class="btn bg-dark" style="color:#FFF;">Sign Up</button>
    </div>

</div>
</div>

<!-- Modal -->
<div class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
  <div class="modal-body">
    <p></p>

    <div class="text-intro">
        <textarea rows="5" cols="50" placeholder="Notes" form="sign-up-form" name="notes"></textarea>
    </div>

    <div class="form-group data-expe">
        <div class="data-expe-form">
            <legend>Add Job</legend>
            <input type="text" form="sign-up-form" name="company_name[]" placeholder="Company" class="form-control"/><br/>
            <input type="text" form="sign-up-form" name="job_title[]" placeholder="Job Title" class="form-control"/><br/>
            <input type="text" form="sign-up-form" name="salary[]" placeholder="Salary" class="form-control"/><br/>
        </div>
        <div id="additional-expe-form" class="additional-expe-form"></div>
        <button type="button" class="btn btn-outline-danger add-job">Another Job</button>
    </div>

    <div class="form-group data-edu">
        <div class="data-edu-form">
            <input type="text" form="sign-up-form" name="institution_name[]" placeholder="institution" class="form-control"/><br/>
            <input type="text" form="sign-up-form" name="course[]" placeholder="Course" class="form-control"/><br/>
            <input type="text" form="sign-up-form" name="course_status[]" placeholder="Course Status" class="form-control"/><br/> 
        </div>
        <div id="additional-edu-form" class="additional-edu-form"></div>
        <button type="button" class="btn btn-outline-danger add-edu">Another</button>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-danger save-form">Save</button>
</div>
</div>
</div>
</div> <!--/modal-->