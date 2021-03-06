<?php echo render_cell ('admin_frame_cell', 'header');?>

<div id='container' class='<?php echo !$frame_sides ? 'no_sides': '';?>'>
<?php
  if (TownCategory::count ()) {
    if (isset ($message) && $message) { ?>
      <div class='error'><?php echo $message;?></div>
<?php
    } ?>

    <form action='<?php echo base_url (array ('admin', 'towns', 'cate_create_town', $town_category->id));?>' method='post' enctype='multipart/form-data'>
      <table class='table-form'>
        <tbody>
          <tr>
            <th>縣市</th>
            <td>
              <input type='hidden' name='town_category_id' value='<?php echo $town_category->id;?>' />
              <input type='text' id='town_category_name' name='town_category_name' value='<?php echo $town_category->name;?>' readonly />
            </td>
          </tr>
          <tr>
            <th>名稱</th>
            <td>
              <input type='text' id='name' name='name' value='<?php echo $name;?>' placeholder='請輸入名稱..' maxlength='200' pattern='.{1,200}' required title='輸入 1~200 個字元!' />
            </td>
          </tr>
          <tr>
            <th>郵遞區號</th>
            <td>
              <input type='text' id='postal_code' name='postal_code' value='<?php echo $postal_code;?>' placeholder='請輸入郵遞區號..' maxlength='200' pattern='.{1,200}' required title='輸入 1~200 個字元!' />
            </td>
          </tr>
          <tr>
            <th>緯度</th>
            <td>
              <input type='text' id='latitude' name='latitude' value='<?php echo $latitude;?>' placeholder='請輸入緯度..' maxlength='200' pattern='.{1,200}' required title='輸入 1~200 個字元!' />
            </td>
          </tr>
          <tr>
            <th>緯度</th>
            <td>
              <input type='text' id='longitude' name='longitude' value='<?php echo $longitude;?>' placeholder='請輸入緯度..' maxlength='200' pattern='.{1,200}' required title='輸入 1~200 個字元!' />
            </td>
          </tr>
          <tr>
            <th>放大級別</th>
            <td>
              <input type='text' id='zoom' name='zoom' value='<?php echo $zoom;?>' placeholder='請輸入放大級別..' maxlength='3' pattern='.{1,3}' required title='輸入 1~3 個字元!' />
            </td>
          </tr>
          <tr>
            <th>地圖</th>
            <td>
              <div class='map'>
                <i></i><i></i><i></i><i></i>
                <div id='map'></div>
                <div id='loading_data'>資料讀取中...</div>
              </div>
            </td>
          </tr>
          <tr>
            <td colspan='2'>
              <a href='<?php echo base_url ('admin', 'towns', 'cate_index');?>'>回列表</a>
              <button type='reset' class='button'>重填</button>
              <button type='submit' class='button'>確定</button>
            </td>
          </tr>
        </tbody>
      </table>
    </form>
<?php
  } else { ?>
    <a href='<?php echo base_url ('admin', 'towns', 'cate_add');?>' class='create_cate'>請先新稱縣市分類！</a>
<?php
  } ?>
</div>

<?php echo render_cell ('admin_frame_cell', 'footer');?>
