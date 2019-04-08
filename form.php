<div>
     <h1>WEB CULGULATOR</h1>
</div>

<div class="row">
    <div class="col-4"></div>
    <div class="col-4">
        <div class="card mb-4 mt-4 text-light">
            <!-- <div class="card-header text-center"><b>WEB CULGULATE</b></div> -->
            <div class="card-body">
                <form method="post" action="cal.php" class="form">
                    <div class="form-group">
                        <label for="name">FirstName</label>
                        <input type="text" placeholder="Enter FirstName" name="firstname" id="name" required class="form-control">
                    </div>
                    <div class="form-group">
                    <label for="select" name="option">Select Option</label>
                       <select class="custom-select custom-select-sm">
                          <option value="none">None</option>
                          <option value="add">Add</option>
                          <option value="minus">Minus</option>
                          <option value="miltiply"">Multiply</option>
                          <option value="divide">Divide</option>
                       </select>
                    </div>
                    <div class="form-group">
                        <label for="name">Second Number</label>
                        <input type="text" placeholder="Enter Second Number" name="second" id="name" required class="form-control">
                    </div>
                   <div class="card-footer">
                     <button type="submit" name="btn-add" class="btn btn-success float-left">Calculate</button>
                </div>
            </form>
        </div>
    </div>
    <div class="col-4"></div>
</div>