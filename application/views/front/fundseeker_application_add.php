<div class="col-row">
<div class="col-sm-12">
<form method="POST" enctype='multipart/form-data' action="<?=base_url()?>fundseeker/application/submit_app">

 <div class="col-sm-12">
  <input class="form-control" type="text" name="company" placeholder="Company Name" required>
 </div>
 
 
 <div class="col-sm-12">
  <input class="form-control" type="text" name="category" placeholder="Business Type" required>
 </div>
 
 
  <div class="col-sm-12">
  <textarea class="form-control" name="address" placeholder="Compay Address" rows='5'></textarea>
 </div>
 
 
 <div class="col-sm-12">
  <input class="form-control" type="text" name="website" placeholder="Website" required>
 </div>
 
 
 <div class="col-sm-12">
  <input class="form-control" name="designation" type="text" placeholder="Your Designation" required>
 </div>
 
 <div class="col-sm-12">
  <textarea class="form-control" name="description" placeholder="Description" rows='5'></textarea>
 </div>
 
 <div class="col-sm-12">
  <input class="form-control" name="equity" type="text" placeholder="How much equity do you own in business?" required>
 </div>
 
 
  <div class="col-sm-12">
  <p>I am seeking INR <input type="text" name="seek_amount" > and I'm willing to give up <input type="text" name="shares"> % .</p>
 </div>
 
  <div class="col-sm-12">
 <select class="form-control" name="company_stage">
					  <option selected disabled>What stage is your company in ? </option>
					  <option value="Good Idea">Good Idea</option>
					  <option value="Research & Development">Research & Development</option>
					  <option value="Shipping & Live">Shipping & Live</option>
					  <option value="Expansion">Expansion</option>
					 </select>
 </div>
 
 
  <div class="col-sm-12">
  <textarea class="form-control" name="money_invested" placeholder="How much money have you invested in the company and in what time? What was that money used for?" rows='5'></textarea>
 </div>
 
 
 <div class="col-sm-12">
  <textarea class="form-control" name="lifespan" placeholder="When did you start the business and for how long you have been operating? " rows='2'></textarea>
 </div>
 
 <div class="col-sm-12">
  <textarea class="form-control" name="turnover_id" placeholder="What are you business total sales since starting? " rows='2'></textarea>
 </div>
 
  <div class="col-sm-12">
   <select class="form-control" name="money_raised" >
					  <option selected disabled>Have you ever tried to raise money from outside sources?</option>
					  <option value="Yes">Yes</option>
					  <option value="No">No</option>
					 </select>
		 <textarea class="form-control" name="money_raised_description" placeholder="If yes, how much and from where ? " rows='2'></textarea>
 			 
 </div>
 <div class="col-sm-12">
  <textarea class="form-control" name="other_info" placeholder="Anything else you want to share?" rows='2'></textarea>
 </div>
 
 
<div class="col-sm-12">
  <input class="form-control" name="pan" type="text" placeholder="PAN CARD Number" required>
 </div>
 
<div class="col-sm-12">
  <input class="form-control" name="gstin" type="text" placeholder="GSTIN Number" required>
 </div>
 
 
<div class="col-sm-12">
<h4>Aadhar Card Photo</h4>

<h6>Front</h6>
  <input class="form-control" name="aadhar_front" type="file" required>
<h6>Back</h6>  
  
  <input class="form-control" name="aadhar_back" type="file" required>
 </div>
 

 <div class="col-sm-12">
 <h4>Pan Card Photo</h4>

<h6>Front</h6>
  <input class="form-control" name="pan_front" type="file" required>
<h6>Back </h6>  
   <input class="form-control" name="pan_back" type="file" required>
 </div>
 
  <div class="col-sm-12">
 <h4>Annual Report (Last Financial Year)</h4>


  <input class="form-control" name="annual_report" type="file" required>

 </div>
 
 <div class="submit-button">
                      <button class="btn btn-common" id="form-submit" type="submit">Submit Application</button>
                      <div id="msgSubmit" class="h3 text-center hidden"></div> 
                      <div class="clearfix"></div> 
                    </div>
					
 
</form>
</div>
</div>