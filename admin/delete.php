<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../logo/title.png">
  <title>Moto-Rev</title>
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/new.css">
  <link rel="stylesheet" type="text/css" href="../css/fontawesome/css/all.css">
</head>
<body>
		<div class="container">
      <h1 class="text-danger">Wheeler-type:</h1>
      <select class="form-control" id="type" onchange="toggleType()">
        <option value="bike">2-wheeler</option>
        <option value="car">4-wheeler</option>  
      </select>
      <hr>
        <h1 align="center" class="text-info" id="wheeler2"><i class="fas fa-motorcycle"></i> 2-wheeler</h1>
        <h1 align="center" class="text-info" id="wheeler4"><i class="fas fa-car"></i> 4-wheeler</h1>

        <button class="btn btn-primary" onclick="showDescription()" id="prev">Description</button>
        <button class="btn btn-primary" onclick="showSpecification()" id="next">Specifiication</button>
        <hr>
        <div id="description">
          <table class="table table-hover table-striped">
            <tr>
              <td>Brand Name</td>
              <td>
                <div class="col-xs-5">
                <input class="form-control" id="brand" name="brand" type="text">
                </div>
              </td>
            </tr>
            <tr>
              <td>Model</td>
              <td>
                <div class="col-xs-5">
                <input class="form-control" id="model" name="model" type="text">
                </div>
              </td>
            </tr>
            <tr>
              <td>Width (in mm)</td>
              <td>
                <div class="col-xs-5">
                <input class="form-control" id="width" name="width" type="text">
                </div>
              </td>
            </tr>
            <tr>
              <td>Height (in mm)</td>
              <td>
                <div class="col-xs-5">
                <input class="form-control" id="height" name="height" type="text">
                </div>
              </td>
            </tr>
            <tr>
              <td>length(mm)</td>
              <td>
                <div class="col-xs-5">
                <input class="form-control" id="length" name="length" type="text">
                </div>
              </td>
            </tr>
            <tr>
              <td>Wheelbase (in mm)</td>
              <td>
                <div class="col-xs-5">
                <input class="form-control" id="wheelbase" name="wheelbase" type="text">
                </div>
              </td>
            </tr>
            <tr>
              <td>Ground Clearance (in mm)</td>
              <td>
                <div class="col-xs-5">
                <input class="form-control" id="groundClearance" name="groundClearance" type="text">
                </div>
              </td>
            </tr>
            <tr>
              <td>Height of Seat (in mm)</td>
              <td>
                <div class="col-xs-5">
                <input class="form-control" id="seatHeight" name="seatHeight" type="text">
                </div>
              </td>
            </tr>
            <tr>
              <td>Kerb Weight (kgs)</td>
              <td>
                <div class="col-xs-5">
                <input class="form-control" id="kerbWeight" name="kerbWeight" type="text">
                </div>
              </td>
            </tr>
            <tr>
              <td>Fuel Tank Storage Capacity</td>
              <td>
                <div class="col-xs-5">
                <input class="form-control" id="fuelCapacity" name="fuelCapacity" type="text">
                </div>
              </td>
            </tr>
            <tr>
              <td>Maximum Power Output (HP)</td>
              <td>
                <div class="col-xs-5">
                <input class="form-control" id="power" name="power" type="text">
                </div>
              </td>
            </tr>
            <tr>
              <td>Maximum Torque Output (Nm)</td>
              <td>
                <div class="col-xs-5">
                <input class="form-control" id="torque" name="torque" type="text">
                </div>
              </td>
            </tr>
            <tr>
              <td>Front view</td>
              <td><input type="file" name="frontview" id="frontview"><label for="frontview" class="Upload form-control">Upload the pix <i class="fas fa-upload"></i></label></td>
            </tr>
            <tr>
              <td>Rear view</td>
              <td><input type="file" name="rearview" id="rearview"><label for="rearview" class="Upload form-control">Upload the pix <i class="fas fa-upload"></i></label></td>
            </tr>
            <tr>
              <td>Side view</td>
              <td><input type="file" name="sideview" id="sideview"><label for="sideview" class="Upload form-control">Upload the pix <i class="fas fa-upload"></i></label></td>
            </tr>
            <tr>
              <td>Top view</td>
              <td><input type="file" name="topview" id="topview"><label for="topview" class="Upload form-control">Upload the pix <i class="fas fa-upload"></i></label></td>
            </tr>
        </table>
        <h2>Features</h2>
          <div>
            <textarea name="comments" id="comments" class="form-control">
            </textarea>
            <hr>
            <label for="next" class="text-success">Next <i class="fas fa-arrow-right"></i></label>
          </div>
        </div>
        <div id="specification">
          <table class="table table-hover table-striped">
            <tr>
              <td>Price(Rs)</td>
              <td>
                <div class="col-xs-5">
                <input class="form-control" id="price" name="price" type="text">
                </div>
              </td>
            </tr>
            <tr>
                <td>Displacement</td>
                <td>
                  <div class="col-xs-5">
                  <input class="form-control" id="displacement" name="displacement" type="text">
                  </div>
                </td>
            </tr>
            <tr>
                <td>No. of Cylinder</td>
                <td>
                  <div class="col-xs-5">
                  <input class="form-control" id="nCylinder" name="nCylinder" type="text">
                  </div>
                </td>
            </tr>
            <tr>
                <td>Fuel Sypply Type</td>
                <td>
                  <div class="col-xs-5">
                  <input class="form-control" id="fuelSupplyType" name="fuelSupplyType" type="text">
                  </div>
                </td>
            </tr>
            <tr>
                <td>Chasis</td>
                <td>
                  <div class="col-xs-5">
                  <input class="form-control" id="chasis" name="chasis" type="text">
                  </div>
                </td>
            </tr>
            <tr>
                <td>Front Brake (in mm)</td>
                <td>
                  <div class="col-xs-5">
                  <input class="form-control" id="fBrakeSize" name="fBrakeSize" type="text">
                  </div>
                </td>
            </tr>
            <tr>
                <td>Rear Brake (in mm)</td>
                <td>
                  <div class="col-xs-5">
                  <input class="form-control" id="rBrakeSize" name="rBrakeSize" type="text">
                  </div>
                </td>
            </tr>
            <tr>
                <td>Fuel Efficiency (km/l)</td>
                <td>
                  <div class="col-xs-5">
                  <input class="form-control" id="fuelEfficiency" name="fuelEfficiency" type="text">
                  </div>
                </td>
            </tr>
            <tr>  
              <td>Transmission</td>
              <td>
                <div class="col-xs-5">
                <input class="form-control" id="transmission" name="transmission" type="text">
                </div>
              </td>
            </tr>
            <tr>
              <td>Tyre Size (Front)</td>
              <td>
                <div class="col-xs-5">
                <input class="form-control" id="fTyreSize" name="fTyreSize" type="text">
                </div>
              </td>
            </tr>
            <tr>
              <td>Tyre Size (Rear)</td>
              <td>
                <div class="col-xs-5">
                <input class="form-control" id="rTyreSize" name="rTyreSize" type="text">
                </div>
              </td>
            </tr>
            <tr>
              <td>Brake (Front)</td>
              <td>
                <div class="col-xs-5">
                <input class="form-control" id="fBrake" name="fBrake" type="text">
                </div>
              </td>
            </tr>
            <tr>
              <td>Brake (Rear)</td>
              <td>
                <div class="col-xs-5">
                <input class="form-control" id="rBrake" name="rBrake" type="text">
                </div>
              </td>
            </tr>
            <tr>
              <td>Suspension (Front)</td>
              <td>
                <div class="col-xs-5">
                <input class="form-control" id="fSuspension" name="fSuspension" type="text">
                </div>
              </td>
            </tr>
            <tr>
              <td>Suspension (Rear)</td>
              <td>
                <div class="col-xs-5">
                <input class="form-control" id="rSuspension" name="rSuspension" type="text">
                </div>
              </td>
            </tr>
            <tr>
                <td>ABS</td>
                <td>
                  <div class="col-xs-5">
                  <input class="form-control" id="ABS" name="ABS" type="text">
                  </div>
                </td>
            </tr>
            <tr>
                <td>Rivals</td>
                <td>
                  <div class="col-xs-5">
                  <input class="form-control" id="rivals" name="rivals" type="text">
                  </div>
                </td>
            </tr>
            <tr>
                <td>0-100 Km/hr</td>
                <td>
                  <div class="col-xs-5">
                  <input class="form-control" id="acceleration" name="acceleration" type="text">
                  </div>
                </td>
            </tr>
            <tr>
                <td>Top Speed</td>
                <td>
                  <div class="col-xs-5">
                  <input class="form-control" id="topSpeed" name="topSpeed" type="text">
                  </div>
                </td>
            </tr>
          </table>
          <hr>
          <label for="prev" class="text-danger"><i class="fas fa-arrow-left"></i> Previous</label>
        </div>
    </div>
</body>
</html>
<script type="text/javascript" src="../js/new.js"></script>