<x-default-layout>
    




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
  
    <title>Document</title>
</head>
<body>
  

        <div class="table-responsive">
            <table id="myTable" class="table table-rounded table-row-bordered border gy-7 gs-7">
            <thead>
                <tr class="fw-semibold fs-6 text-gray-800 border-bottom-2 border-gray-200">
        
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Created On</th>
              </tr>
            </thead>
            
            <tbody>
                
                <tr>
                 
                    <td>Row 1 Data 1</td>
                    <td>Row 1 Data 2</td>   <td>Row 1 Data 1</td>
                    <td>Row 1 Data 2</td>   <td>Row 1 Data 1</td>
                    
                </tr>
                <tr>
                 
                    <td>Row 1 Data 1</td>
                    <td>Row 1 Data 2</td>   <td>Row 1 Data 1</td>
                    <td>Row 1 Data 2</td>   <td>Row 1 Data 1</td>
                    
                </tr>
                <tr>
                 
                    <td>Row 1 Data 1</td>
                    <td>Row 1 Data 2</td>   <td>Row 1 Data 1</td>
                    <td>Row 1 Data 2</td>   <td>Row 1 Data 1</td>
                    
                </tr>
                <tr>
                 
                    <td>Row 1 Data 1</td>
                    <td>Row 1 Data 2</td>   <td>Row 1 Data 1</td>
                    <td>Row 1 Data 2</td>   <td>Row 1 Data 1</td>
                    
                </tr>
                <tr>
                 
                    <td>Row 1 Data 1</td>
                    <td>Row 1 Data 2</td>   <td>Row 1 Data 1</td>
                    <td>Row 1 Data 2</td>   <td>Row 1 Data 1</td>
                    
                </tr>
                <tr>
                 
                    <td>Row 1 Data 1</td>
                    <td>Row 1 Data 2</td>   <td>Row 1 Data 1</td>
                    <td>Row 1 Data 2</td>   <td>Row 1 Data 1</td>
                    
                </tr>
                <tr>
                 
                    <td>Row 1 Data 1</td>
                    <td>Row 1 Data 2</td>   <td>Row 1 Data 1</td>
                    <td>Row 1 Data 2</td>   <td>Row 1 Data 1</td>
                    
                </tr>
                <tr>
                 
                    <td>Row 1 Data 1</td>
                    <td>Row 1 Data 2</td>   <td>Row 1 Data 1</td>
                    <td>Row 1 Data 2</td>   <td>Row 1 Data 1</td>
                    
                </tr>
                
                <tr>
            
                @foreach ($user_data as $list)
              
               
                    <td>{{$list->fname}}</td>
                    <td>{{$list->lname}}</td>
                    <td>{{$list->email}}</td>
                    <td>{{$list->number}}</td>
                    <td>{{$list->created_at}}</td>
                    <td></td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                
                <tr class="fw-semibold fs-6 text-gray-800 border-top-2 border-gray-200">
        
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Created On</th>
              </tr>
            </tfoot>
        </table>
    </div>
    <form>
     
		<div class="card-body">		
            <div class="col-lg-6 m-form__group-sub">
                <label> First Name  </label>
                <input type="text" class="form-control m-input" name="fname" placeholder="Enter Client First Name" value="{{$list->fname}}" required>
            </div>
        </div>
           
    </form>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script>
        // $(document).ready (function () {
        //     $('#myTable').DataTable();
        // });
      let table = new DataTable('#myTable');
    </script>
</body>
</html>
</x-default-layout>