<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>Untitled</title>
    <script language="javascript" type="text/javascript">
 function printWindow()
{
   var printReadyEle = document.getElementById("printContent");
   var shtml = '<HTML>\n<HEAD>\n';
   if (document.getElementsByTagName != null)
   {
      var sheadTags = document.getElementsByTagName("head");
      if (sheadTags.length > 0)
         shtml += sheadTags[0].innerHTML;
    }
    shtml += '</HEAD>\n<BODY>\n';
    if (printReadyEle != null)
    {
       shtml += '<form name = frmform1>';
       shtml += printReadyEle.innerHTML;
    }
    shtml += '\n</form>\n</BODY>\n</HTML>';
    var printWin1 = window.open();
    printWin1.document.open();
    printWin1.document.write(shtml);
    printWin1.document.close();
    printWin1.print();
}
</script>
</head>
<body>
     <form id="form1" runat="server">
        <div id="A">
          ส่วนนี้จะไม่ถูก Print
         </div>
           <div id="printContent">
                <table width="100%">
                    <tr align="left">
                        <td>
                            <asp:PlaceHolder ID="PlaceHolder1" runat="server"></asp:PlaceHolder>
                        </td>
                    </tr>
                    <tr align="left">
                        <td>
                        </td>
                    </tr>
                    <tr align="left">
                        <td valign="top">
                            <asp:PlaceHolder ID="PlaceHolder2" runat="server"></asp:PlaceHolder>
                            <asp:PlaceHolder ID="PlaceHolder3" runat="server"></asp:PlaceHolder>
                            <asp:PlaceHolder ID="PlaceHolder4" runat="server"></asp:PlaceHolder>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            <input type="button" value="Print" onclick="printWindow();">
                        </td>
                    </tr>
                </table>
            </div>
      <div id="B">
          ส่วนนี้ก็จะไม่ถูก Print อีกเช่นกัน
         </div>
     </form>
</body>