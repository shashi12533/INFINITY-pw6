<?php
/**
 * Created by PhpStorm.
 * User: eugenieroques
 * Date: 19/06/2018
 * Time: 12:22
 */

require_once "./includes/head.php";
require_once "./includes/connection.php";

?>

<div class="container">
  <div class="card mt-5">
    <div class="card-body">
  <form class="form" action="actions/user/doadd.php" method="post">
    <label style="width: 150px;">Name :</label>
    <input type="text" name="name" placeholder="Name"></input><br>
    <label style="width: 150px;">Age :</label>
    <input type="number" name="age" placeholder="Age"></input><br>
    <label style="width: 150px;">Nationality :</label>
  <input type="text" name="nationality" placeholder="Nationality"></input><br>
  <label style="width: 150px;">Size :</label>
    <input type="number" name="size" placeholder="Size (in cm)"></input><br>
      <label style="width: 150px;">Weight :</label>
    <input type="number" name="weight" placeholder="Weight (in kg)"></input><br>
    <label style="width: 150px;">Allergy :</label>
    <input type="text" name="allergy" placeholder="Allergy"></input><br>
    <label style="width: 150px;">Diet</label>
    <input type="text" name="diet" placeholder="Diet"></input><br>
    <label style="width: 150px;">Infirmity :</label>
    <input type="text" name="infirmity" placeholder="Infirmity"></input><br>
    <label style="width: 150px;">Medication :</label>
    <input type="text" name="medication" placeholder="Medication"></input><br>
    <label style="width: 150px;">Respiratory Issues :</label>
    <input type="text" name="respiratory" placeholder="Respiratory Issues"></input><br>
    <label style="width: 150px;">Mental issues :</label>
    <input type="text" name="mental" placeholder="Mental Issues"></input><br>
    <label style="width: 150px;">Cardiac Issues :</label>
    <input type="text" name="cardiac" placeholder="Cardiac Issues"></input><br>
    <label style="width: 150px;">Fears :</label>
    <input type="text" name="fear" placeholder="Fears"></input><br>
<label style="width: 150px;">Alcohol :</label>
    <select class="alcohol" name="alcohol" value="alcohol">
      <option value="never">Never</option>
      <option value="2times">2 times a week</option>
      <option value="2times">4 times a week</option>
      <option value="everyday">Everyday</option>
      <option value="2times">ALL THE TIME-perfusion</option>
    </select><br>
    <label style="width: 150px;">Drugs :</label>
    <select class="drug" name="drug" value="drug">
      <option value="never">Never</option>
      <option value="hard">Hard drugs</option>
      <option value="weed">WEED only</option>
      <option value="toxico">Toxico</option>
      <option value="junky">Junky</option>
    </select><br>
    <label style="width: 150px;">Family :</label>
    <input type="text" name="family" placeholder="Family Members or 0"></input><br>
    <label style="width: 150px;">Pregnancy :</label>
    <input type="text" name="pregnant" placeholder="If yes, term in months"></input><br>
    <label style="width: 150px;">Profession :</label>
    <input type="text" name="professional" placeholder="Profession"></input><br>
    <label style="width: 150px;">Phone :</label>
    <input type="phone" name="phone" placeholder="0X XX XX XX XX"></input><br>
    <label style="width: 150px;">Mail :</label>
    <input type="mail" name="mail" placeholder="mail@mail.com"></input><br>
    <label style="width: 150px;">Address :</label>
    <input type="text" name="address" placeholder="nb street city country"></input><br><br><br>
    <input type="submit" name="submit" value="SUBMIT">
  </form>
</div>
</div>
</div>
