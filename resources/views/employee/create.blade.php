<x-app-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form>
                    <div class="mb-3">
                      <label for="exampleInputName" class="form-label">Name</label>
                      <input type="text" class="form-control" id="exampleInputName">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputGender" class="form-label">Gender</label>
                      <select class="form-select" aria-label="Default select example">
                        <option selected>Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPhone" class="form-label">Phone</label>
                      <input type="text" class="form-control" id="exampleInputPhone">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
</x-app-layout>