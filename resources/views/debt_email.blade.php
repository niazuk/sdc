<!-- https://divtable.com/table-styler/ -->

<style type="text/css">
div.blueTable {
  border: 0px solid #1C6EA4;
  background-color: #EEEEEE;
  width: 100%;
  text-align: left;
  border-collapse: collapse;
}
.divTable.blueTable .divTableCell, .divTable.blueTable .divTableHead {
  border: 0px solid #AAAAAA;
  padding: 7px 7px;
}
.divTable.blueTable .divTableBody .divTableCell {
  font-size: 18px;
}
.divTable.blueTable .divTableRow:nth-child(even) {
  background: #D0E4F5;
}
.divTable.blueTable .divTableHeading {
  background: #1C6EA4;
  background: -moz-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
  background: -webkit-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
  background: linear-gradient(to bottom, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
  border-bottom: 2px solid #444444;
}
.divTable.blueTable .divTableHeading .divTableHead {
  font-size: 28px;
  font-weight: bold;
  color: #FFFFFF;
  border-left: 2px solid #D0E4F5;
}
.divTable.blueTable .divTableHeading .divTableHead:first-child {
  border-left: none;
}

.blueTable .tableFootStyle {
  font-size: 14px;
}
.blueTable .tableFootStyle .links {
     text-align: right;
}
.blueTable .tableFootStyle .links a{
  display: inline-block;
  background: #1C6EA4;
  color: #FFFFFF;
  padding: 2px 8px;
  border-radius: 5px;
}
.blueTable.outerTableFooter {
  border-top: none;
}
.blueTable.outerTableFooter .tableFootStyle {
  padding: 3px 5px; 
}
/* DivTable.com */
.divTable{ display: table; }
.divTableRow { display: table-row; }
.divTableHeading { display: table-header-group;}
.divTableCell, .divTableHead { display: table-cell;}
.divTableHeading { display: table-header-group;}
.divTableFoot { display: table-footer-group;}
.divTableBody { display: table-row-group;}

</style>

<div class="divTable blueTable">
<div class="divTableHeading">
<div class="divTableRow">
<div class="divTableHead">Received a Debt form</div>
</div>
</div>
<div class="divTableBody">
<div class="divTableRow">
<div class="divTableCell">Date Due</div></div>
<div class="divTableRow">
<div class="divTableCell">{{ $name['due_date'] }}</div></div>
<div class="divTableRow">
<div class="divTableCell">Debt Type</div></div>
<div class="divTableRow">
<div class="divTableCell">{{ $name['debt_type'] }}</div></div>
<div class="divTableRow">
<div class="divTableCell">Initial Amount</div></div>
<div class="divTableRow">
<div class="divTableCell">{{ $name['amount'] }}</div></div>
<div class="divTableRow">
<div class="divTableCell">Current stage of this debt</div></div>
<div class="divTableRow">
<div class="divTableCell">{{ $name['stage'] }}</div></div>
<div class="divTableRow">
<div class="divTableCell">Additional Information</div></div>
<div class="divTableRow">
<div class="divTableCell">{{ $name['details'] }}</div></div>
<div class="divTableRow">
<div class="divTableCell">Name</div></div>
<div class="divTableRow">
<div class="divTableCell">{{ $name['c_name'] }}</div></div>
<div class="divTableRow">
<div class="divTableCell">Company</div></div>
<div class="divTableRow">
<div class="divTableCell">{{ $name['c_company'] }}</div></div>
<div class="divTableRow">
<div class="divTableCell">Email</div></div>
<div class="divTableRow">
<div class="divTableCell">{{ $name['c_email'] }}</div></div>
<div class="divTableRow">
<div class="divTableCell">Telephone Number</div></div>
<div class="divTableRow">
<div class="divTableCell">{{ $name['c_phone'] }}</div></div>
<div class="divTableRow">
<div class="divTableCell">Debtor Name</div></div>
<div class="divTableRow">
<div class="divTableCell"> {{ $name['d_name'] }}</div></div>
<div class="divTableRow">
<div class="divTableCell">Debtor Company</div></div>
<div class="divTableRow">
<div class="divTableCell">{{ $name['d_company'] }}</div></div>
<div class="divTableRow">
<div class="divTableCell">Debtor Email</div></div>
<div class="divTableRow">
<div class="divTableCell">{{ $name['d_email'] }}</div></div>
<div class="divTableRow">
<div class="divTableCell">Debtor Telephone Number</div></div>
<div class="divTableRow">
<div class="divTableCell"{{ $name['d_phone'] }}</div></div>
</div>
