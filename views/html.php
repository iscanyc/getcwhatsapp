<form class="gw-form" method="post" action="#">
   <div class="gw-row">
      <div class="gw-col">
         <label>
            <span>WhatsApp Number: </span>
         </label>
         <input type="number" name="number" value="<?= get_option('getcwhatsapp_number'); ?>">
         <small>You must enter with country code, without plus.</small>

      </div>
      <div class="gw-col">
         <label>
            <span>Position: </span>
         </label>
         <select name="position">
            <option value="top-left" <?= get_option('getcwhatsapp_position') == 'top-left' ? 'selected' : ''; ?>>Top -
               Left</option>
            <option value="top-right" <?= get_option('getcwhatsapp_position') == 'top-right' ? 'selected' : ''; ?>>Top -
               Right</option>
            <option value="bottom-left" <?= get_option('getcwhatsapp_position') == 'bottom-left' ? 'selected' : ''; ?>>
               Bottom - Left</option>
            <option value="bottom-right"
               <?= get_option('getcwhatsapp_position') == 'bottom-right' ? 'selected' : ''; ?>>
               Bottom - Right</option>
         </select>
      </div>
   </div>
   <div class="gw-row">
      <div class="gw-col">
         <label>
            <span>Text: </span>
         </label>
         <input type="text" name="text" value="<?= get_option('getcwhatsapp_text'); ?>">
      </div>
   </div>
   <div class="submit">
      <button type="submit" class="button button-primary">Save Plugin</button>
   </div>

</form>
<style>
form.gw-form {
   width: 75vw;
   margin: 30px 20px;
}

div.gw-row {
   display: flex;
   flex-direction: row;
   margin: 0 -15px;
}

div.gw-col {
   display: flex;
   flex: 0 0 30%;
   flex-direction: column;
   max-width: 50%;
   padding: 0 15px;
}
</style>