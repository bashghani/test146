@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Your Application's Landing Page.
                    
                {{--    <SCRIPT> 	
	function show(select_item) {
	    if (select_item == "pear") {
		    hiddenDiv.style.visibility='visible';
			hiddenDiv.style.display='block';
			Form.fileURL.focus();
		} 
		else{
			hiddenDiv.style.visibility='hidden';
			hiddenDiv.style.display='none';
		}
	}	
</SCRIPT>  
<span class="help-block">
                                        <strong>hello</strong>
                                    </span>
<form>
<label>Fruit:</label>
    <select name="Fruit" onchange="java_script_:show(this.options[this.selectedIndex].value)">
        <option value='pear'>pear</option>
        <option value='apple'>apple</option>
        <option value='grapes'>grapes</option>
    </select>

<div id='hiddenDiv'>
    <label>Are you sure you want to eat the apple?</label>
    <select name="AppleQuestion">
        <option value='Yes'>Yes</option>
        <option value='No'>No</option>
    </select>
</div>
</form> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
