@extends('layouts.master')
@section('title','Currency-Exchange Add Rates Page')
@section('content')
   
   <!-- section -->
    <div class="section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
                           <h2><span class="theme_color"></span>Add News</h2>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->

    <!-- contact_form -->
    <div class="section contact_form">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 offset-lg-3">
                    <div class="full">
                        <form class="contact_form_inner" action="#">
                            <fieldset>
                                <div class="field">
                                    <input type="text" name="Title" placeholder="News titles" required/>
                                </div>

                                <fieldset>
                                    <div class="field">
                                        <input type="text" name="image" placeholder="Enter image URL"/>
                                    </div>
                                    <p style="align-content: center; color: aliceblue;">OR</p>
                                    <div style="color: aliceblue;">
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                    </div>
                                <div class="field">
                                    <textarea name="Description" placeholder="Description....." required></textarea>
                                </div>
                                <div class="field center">
                                    <button>SUBMIT</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact_form -->
@endsection
	
</body>

</html>