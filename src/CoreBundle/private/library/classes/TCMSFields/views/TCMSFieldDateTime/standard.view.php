<?php
/** @var $oField TCMSField* */
/** @var $bFieldHasErrors boolean* */
$sValue = $oField->_GetFieldValue();
if ('0000-00-00 00:00:00' == $sValue or empty($sValue)) {
    $sValueDate = '';
    $sValueHour = '';
    $sValueMinute = '';
} else {
    $sValueDate = date('d.m.Y', strtotime($sValue));
    $sValueHour = date('H', strtotime($sValue));
    $sValueMinute = date('i', strtotime($sValue));
}
?>
<input type="text" id="<?=TGlobal::OutHTML($oField->name); ?>_date" name="<?=TGlobal::OutHTML($oField->name); ?>_date"
       value="<?=TGlobal::OutHTML($sValueDate); ?>"/>
<select name="<?=TGlobal::OutHTML($oField->name); ?>_hour" id="<?=TGlobal::OutHTML($oField->name); ?>_hour">
    <option value="">&nbsp;&nbsp;</option>
    <?php
    for ($i = 0; $i <= 23; ++$i) {
        $iValue = str_pad($i, 2, '0', STR_PAD_LEFT);
        $sSelected = '';
        if ($iValue == $sValueHour) {
            $sSelected = ' selected="selected"';
        }
        echo '<option value="'.$iValue.'"'.$sSelected.'>'.$iValue.'</option>';
    }
    ?>
</select>
<select name="<?=TGlobal::OutHTML($oField->name); ?>_min" id="<?=TGlobal::OutHTML($oField->name); ?>_min">
    <option value="">&nbsp;&nbsp;</option>
    <?php
    for ($i = 0; $i <= 59; ++$i) {
        $iValue = str_pad($i, 2, '0', STR_PAD_LEFT);
        $sSelected = '';
        if ($iValue == $sValueMinute) {
            $sSelected = ' selected="selected"';
        }
        echo '<option value="'.$iValue.'"'.$sSelected.'>'.$iValue.'</option>';
    }
    ?>
</select>