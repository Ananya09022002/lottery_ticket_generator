<?php
session_start();
include "header.php" ; ?>
<form action="display.php" method="POST">
    <div class="modal-body">
        <div class="form-group">
        <label for="place">Enter name of place</label>
        <input type="text" name="place" placeholder ="Place">
        </div>
        <div class="form-group">
        <label for="date">Enter Date</label>
        <input type="date" name="date">
        </div>
        <div class="form-group">
        <label for="day">Enter Day</label>
        <input type="text" name="day" placeholder ="Day">
        </div>
        <div class="form-group">
        <label for="time">Enter Time</label>
        <input type="time" name="time">
        </div>
        <div class="form-group">
        <label for="prize">Enter Prize Money</label>
        <input type="number" name="prize" placeholder ="Prize Money">
        </div>
        <div class="form-group">
        <label for="draw">Enter Draw Number</label>
        <input type="number" name="draw" placeholder ="Draw Number">
        </div>
    </div>

    <button type="submit" class="save" name="ticket_details">SUBMIT</button>
</form>
<?php include "footer.php" ; ?>