<body class="quizbody">
@extends('layout')
@section('title', 'Quiz')

@section('main')

<form action="/day" method="post" >
          @csrf
<div class="row  justify-content-center container" >


<div class="questionBody child">
<div class="form-group col">
  <label for="name" class="questions">
    What skin concerns are you targeting?
  </label>
  <div class="formSubtext"> Choose as many as needed. </div>
<div class="row justify-content-center">
        <label for="question-1-answers-A" class="formSelect col-3"> Acne
         <input type="checkbox" name="question-1-answers" id="question-1-answers-A" class="custom-checkbox-input" value="A"/>
         <span class="custom-checkbox-text"></span>
         </label>

        <label for="question-1-answers-B" class="formSelect col-3"> Fungal Acne
         <input type="checkbox" name="question-1-answers" id="question-1-answers-B" class="custom-checkbox-input" value="B" />
          <span class="custom-checkbox-text"></span>
           </label>

                <label for="question-1-answers-C" class="formSelect col-3"> Dryness
         <input type="checkbox" name="question-1-answers" id="question-1-answers-C" class="custom-checkbox-input" value="C" />
          <span class="custom-checkbox-text"></span>
        </label>
   </div>
       <div class="row justify-content-center">

                <label for="question-1-answers-D" class="formSelect col-3"> Wrinkles / Fine Lines
         <input type="checkbox" name="question-1-answers" id="question-1-answers-D" class="custom-checkbox-input" value="D" />
          <span class="custom-checkbox-text"></span>
        </label>

                <label for="question-1-answers-E" class="formSelect col-3"> Pores
         <input type="checkbox" name="question-1-answers" id="question-1-answers-E" class="custom-checkbox-input" value="E"/>
          <span class="custom-checkbox-text"></span>
        </label>

                <label for="question-1-answers-F" class="formSelect col-3"> Rosacea / Redness
         <input type="checkbox" name="question-1-answers" id="question-1-answers-F" class="custom-checkbox-input" value="F" />
          <span class="custom-checkbox-text"></span>
        </label>
</div>
     <div class="row justify-content-center">
                <label for="question-1-answers-G" class="formSelect col-3"> Pigmentation

         <input type="checkbox" name="question-1-answers" id="question-1-answers-G" class="custom-checkbox-input" value="G" />
           <span class="custom-checkbox-text"></span>
        </label>
</div>
</div>
</div>


<div class="questionBody child">
<div class="form-group col">
  <label for="name" class="questions" style="  margin-bottom: 2rem;">
    What routines do you want recommendations for?
  </label>
  <!-- <div class="formSubtext"> Choose as many as needed. </div> -->
<div class="row justify-content-center">
  <label for="question-2-answers-A" class="formSelect  col-3">
         Morning
         <input type="radio" name="question-2-answers" id="question-2-answers-A" class="custom-checkbox-input" value="A" />
           <span class="custom-checkbox-text"></span>
       </label>

       <label for="question-2-answers-B" class="formSelect  col-3">

         Night
         <input type="radio" name="question-2-answers" id="question-2-answers-B" class="custom-checkbox-input" value="B" />
           <span class="custom-checkbox-text"></span>
        </label>
<label for="question-2-answers-C" class="formSelect col-3">
                Both
         <input type="radio" name="question-2-answers" id="question-2-answers-C" class="custom-checkbox-input" value="C" />
 <span class="custom-checkbox-text"></span>
             </label>
   </div>

</div>
</div>

<div class="questionBody child">
<div class="form-group col">
  <label for="name" class="questions">
    What types of products do you want to get recommendations for?
  </label>
  <div class="formSubtext"> Choose as many as needed. </div>
<div class="row justify-content-center">
        <label for="question-3-answers-A" class="formSelect col-3"> Cleanser
         <input type="checkbox" name="question-3-answers" id="question-3-answers-A" class="custom-checkbox-input" value="A"/>
         <span class="custom-checkbox-text"></span>
         </label>

        <label for="question-3-answers-B" class="formSelect col-3"> Toner
         <input type="checkbox" name="question-3-answers" id="question-3-answers-B" class="custom-checkbox-input" value="B" />
          <span class="custom-checkbox-text"></span>
           </label>

                <label for="question-3-answers-C" class="formSelect col-3"> Treatments
         <input type="checkbox" name="question-3-answers" id="question-3-answers-C" class="custom-checkbox-input" value="C" />
          <span class="custom-checkbox-text"></span>
        </label>
   </div>
       <div class="row justify-content-center">

                <label for="question-3-answers-D" class="formSelect col-3"> Moisturizer
         <input type="checkbox" name="question-3-answers" id="question-3-answers-D" class="custom-checkbox-input" value="D" />
          <span class="custom-checkbox-text"></span>
        </label>

                <label for="question-3-answers-E" class="formSelect col-3"> Eye-Care
         <input type="checkbox" name="question-3-answers" id="question-3-answers-E" class="custom-checkbox-input" value="E"/>
          <span class="custom-checkbox-text"></span>
        </label>

                <label for="question-3-answers-F" class="formSelect col-3"> Sun-Care
         <input type="checkbox" name="question-3-answers" id="question-3-answers-F" class="custom-checkbox-input" value="F" />
          <span class="custom-checkbox-text"></span>
        </label>
</div>
     <div class="row justify-content-center">
                <label for="question-3-answers-G" class="formSelect col-3"> Mask

         <input type="checkbox" name="question-3-answers" id="question-3-answers-G" class="custom-checkbox-input" value="G" />
           <span class="custom-checkbox-text"></span>
        </label>
</div>
</div>
</div>

<div class="questionBody child">
<div class="form-group col">
  <label for="name" class="questions" style="  margin-bottom: 2rem;">
    How much time do you have for your routine?
  </label>
<div class="row justify-content-center">
  <label for="question-4-answers-A" class="formSelect  col-3">
         3-4 minutes
         <input type="radio" name="question-4-answers" id="question-4-answers-A" class="custom-checkbox-input" value="A" />
           <span class="custom-checkbox-text"></span>
       </label>

       <label for="question-4-answers-B" class="formSelect  col-3">

         5-10 minutes
         <input type="radio" name="question-4-answers" id="question-4-answers-B" class="custom-checkbox-input" value="B" />
           <span class="custom-checkbox-text"></span>
        </label>
<label for="question-4-answers-C" class="formSelect col-3">
                Not Worried About Time
         <input type="radio" name="question-4-answers" id="question-4-answers-C" class="custom-checkbox-input" value="C" />
 <span class="custom-checkbox-text"></span>
             </label>
   </div>

</div>
</div>


</div>

<button type="submit" class="col submitButton">Submit</button>


</form>

@endsection
</body>
