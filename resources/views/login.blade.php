
<div class="container" style="background-color: rgb(114, 174, 114); border: 5px solid rgb(0, 81, 31) " >
    <div class="row mb-5">
        <div class="col-lg-12">
            <h2> Submit New Report</h2>
        </div>
    </div>
    <div class="row">
        <form action="{{route('report.store')}}" method="POST">
            @csrf 
            <!-- makes each piece of data sent via form with a unique token/id -->
             <div class="col-lg-12 col-md-12">
                <div class="form-group">
                    <strong>Title:</strong>
                    <input type="text" name="title" id="title" class="form-control">
                </div>
                <div class="form-group">
                    <strong>Description:</strong>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <strong>Location:</strong>
                    <input type="text" name="location" id="location" class="form-control">
                </div>
                <div class="form-group">
                    <strong>Date:</strong>
                    <input type="date" name="date" id="date" class="form-control">
                </div>
                
             </div>
             <div class="col-lg-12 col-md-12">
                <button type="submit" class="btn btn-primary">Submit</button>
             </div>
        </form>
    </div>
</div>