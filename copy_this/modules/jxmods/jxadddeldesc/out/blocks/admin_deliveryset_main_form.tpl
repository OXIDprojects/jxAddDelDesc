[{$smarty.block.parent}]

            <tr>
                <td class="edittext" width="140" style="vertical-align:top;">
                [{ oxmultilang ident="GENERAL_DESCRIPTION" }]
                </td>
                <td class="edittext" width="250">
                <textarea class="editinput" rows="4" cols="48" [{*style="width:350;height:150;"*}] wrap="VIRTUAL" name="editval[oxdeliveryset__jxdesc]" [{ $readonly }]>[{$edit->oxdeliveryset__jxdesc->value}]</textarea>
                </td>
            </tr>

            