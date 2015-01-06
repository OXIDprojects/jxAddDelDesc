[{$smarty.block.parent}]

            <tr>
                <td class="edittext" width="140">
                [{ oxmultilang ident="GENERAL_DESCRIPTION" }]
                </td>
                <td class="edittext" width="250">
                <input type="text" class="editinput" size="50" maxlength="[{$edit->oxdeliveryset__jxdesc->fldmax_length}]" name="editval[oxdeliveryset__jxdesc]" value="[{$edit->oxdeliveryset__jxdesc->value}]" [{ $readonly }]>
                </td>
            </tr>

            