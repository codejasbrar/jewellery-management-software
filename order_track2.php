<?php include_once('header.php'); ?>
<?php
if(isset($_REQUEST['id']) && !empty($_REQUEST['id'])){
	$_SESSION['track_order_id']=$_REQUEST['id'];
}
    $order_id=$_SESSION['track_order_id'];


$sqlo="select * from orders where id='$order_id'";
 $resulto = mysqli_query($con, $sqlo);  
           $row = mysqli_fetch_assoc($resulto);
if($row>0)
{

}else{
	exit;
}

$status=$row['status'];
 $due_date =date("d-m-Y", strtotime($row['due_date']));
?>

<style>



/*order-trakcing#14 start here*/

.title-customer-data {
    text-align: center;
    margin-top: 60px;
}
span.status-font {
    font-size: 23px;
    font-weight: 600;
}
.status-heading {
    font-size: 23px;
}
.list-departments h1 {
    font-family: 'Mulish';
    font-size: 26px;
    line-height: 26px;
    letter-spacing: 0.01em;
    text-transform: capitalize;
    color: #22262B;
    font-weight: bold;
}
.step-one-holding span {
    background: #3988089e;
    border-radius: 999px;
    display: block;
    height: 64px;
    width: 64px;
    color: #fff;
    text-align: center;
    font-size: 34px;
    line-height: 60px;
}

.step-one-holding span:after {
    border: solid 1px #84b565;
    width: 4px;
    content: '';
    display: block;   
    width: 70%;
    position: absolute;
    bottom: 68%;
    left: 70px;
    height: 6px;
    background: #84b565;
}

.two-one-holding span {
    background: #f5998e;
    border-radius: 999px;
    display: block;
    height: 64px;
    width: 64px;
    color: #fff;
    text-align: center;
    font-size: 34px;
    line-height: 60px;
}

.two-one-holding span:after {
    border: solid 1px #f5998e;
    width: 4px;
    content: '';
    display: block;    z-index: -1;
    width: 70%;
    position: absolute;
    bottom: 68%;
    left: 70px;
    height: 6px;
    background: #f5998e;
}
.three-one-holding span {
    background: #82b0f8;
    border-radius: 999px;
    display: block;
    height: 64px;
    width: 64px;
    color: #fff;
    text-align: center;
    font-size: 34px;
    line-height: 60px;
}

.three-one-holding span:after {
    border: solid 1px #f5998e;
    width: 4px;    z-index: -1;
    content: '';
    display: block;
    width: 70%;
    position: absolute;
    bottom: 68%;
    left: 70px;
    height: 6px;
    background: #f5998e;
}
.holding-checkbox {
    margin-top: 17px;
}

/*order-trakcing#14 end here*/






.login-main-inner-section {
    display: grid;
    grid-template-areas:
        "left left right";
    column-gap:100px;
    justify-content: center;
    align-items: center;
}
.material-table .table-bordered td, .table-bordered th {
    padding-right: 117px;
}
.material-table .table-bordered td, .table-bordered th {
    padding-right: 75px;
}
.department-tale {
    width: 100% !important;
}

.department-padding {
    padding: 20px 0;
}
.department-border {
    border-top: solid 1px #0000000f;
    padding: 20px 0;
    margin-top: 22px;
}
.department-name {
    margin-bottom: 26px; padding:0;
}
.depatment-delete {
    margin-bottom: 21PX;
}
.login-left-bg-area {
    grid-area: left;
    min-width: 750px;
    background: #ddd;
    background-image: url("../img/bg.png");
    background-size: cover;
    display: flex;
    justify-content: flex-start;
    align-items: flex-end;
    background-position: center;
    background-repeat: no-repeat;
    position: relative;
    z-index: 1;
    height: 100vh;
}
table.table.table-striped.table-responsive.table-bordered.cust-search {
    width: 98%;
}
.login-left-bg-area:after {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    content: "";
    background: #f44336d4;
    opacity: .5;
    z-index: -1;
    mix-blend-mode: hard-light;
}
.right-main-login-box {
    padding-right: 119px;
}
.login-main-inner-section {
    grid-area: right;
}
.sign-in-title {
    font-family: Mulish;
    font-size: 42px;
    line-height: 65px;
    color: #000000;
    font-weight: bold;
    margin-bottom: 20px;
}

.form-label {
    font-family: 'Mulish';
    font-size: 14px;
    line-height: 20px;
    color: #1A203D;
}

.form-input {
    font-family: 'Mulish';
    font-size: 14px;
    line-height: 20px;
    background: #FFFFFF;
    border: 1px solid #CFD0D7;
    box-sizing: border-box;
    border-radius: 2px;
    padding: 10px 22px;
    width: 100%;
    outline: none;
    -webkit-appearance: none;
    -moz-appearance:    none;
    appearance:        none;
    color: rgba(26, 32, 61, 0.5);
}
.eye-icon-box {
    position: relative;
}

#eye {
    position: absolute;
    right: 5%;
    top: 50%;
    cursor: pointer;
}
.forget-rem-box {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    margin-bottom: 30px;
    margin-top: 30px;
}

.submit-btn {
    width: 100%;
    background: none;
    border: none;
    background: #D47C59;
    border-radius: 4px;
    color: #fff;
    padding: 13px 20px;
    font-family: 'Mulish';
    font-size: 14px;
    line-height: 20px;
    color: #FFFFFF;
    transition: .3s eas-in-out;
    display: block;
    text-align: center;
}
.submit-btn:hover {
    background: #c16743;
}
.forget-box {
    font-family: 'Mulish';
    font-size: 12px;
    line-height: 22px;
    color: #5F6377;
    font-weight: 500;
    display: flex;
    justify-content: center;
    align-items: center;
}

span.forget-box-m {
    height: 17px;
    width: 17px;
    display: inline-block;
    cursor: pointer;
    background: #FCFCFD;
    border: 1px solid #CFD0D7;
    box-sizing: border-box;
    border-radius: 2px;
    margin-right: 8px;
}

.forgot-pass {
    font-family: 'Mulish';
    font-size: 14px;
    line-height: 20px;
    text-align: right;
    color: #D47C59;
}
.google-btn {
    background: #FFFFFF;
    border: 1px solid #3485FE;
    box-sizing: border-box;
    border-radius: 4px;
    font-size: 12px;
    line-height: 17px;
    text-align: center;
    color: #3485FE;
}

.google-btn:hover {
    background: #fff;
}

.google-btn img {
    margin-right: 10px;
}

.or-line-art {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 30px;
    margin-bottom: 30px;
}

.or-text {
    display: block;
    position: relative;
    font-family: Muli;
    font-size: 12px;
    line-height: 22px;
    text-align: center;
    color: #76798A;
    width: 100%;
}

.or-text:before {
    position: absolute;
    left: 0;
    top: 50%;
    width: 42%;
    content: "";
    height: 1px;
    border: 1px solid rgba(26, 32, 61, 0.05);
}
.or-text:after {
    position: absolute;
    right: 0;
    top: 50%;
    width: 42%;
    content: "";
    height: 1px;
    border: 1px solid rgba(26, 32, 61, 0.05);
}

.register-text-main {
    font-family: 'Mulish';
    font-size: 14px;
    line-height: 20px;
    color: #5F6377;
    font-weight: 500;
    margin-top: 40px;
    margin-bottom: 36px;
}

.register-text-link {
    color: #d47c59;
    display: inline-block;
    margin-left: 10px;
}

.bottom-meta-text p {
    font-family: Inter;
    font-style: normal;
    font-weight: normal;
    font-size: 11px;
    line-height: 26px;
    color: #8D909E;
}
.login-bottom-logo {
    width: 293px;
    height: 158px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 40px;
    background: #FFFFFF;
    box-shadow: 0px 24px 44px rgba(0, 0, 0, 0.15);
    border-radius: 0px 10px 10px 0px;
}


/*------start of update customer page ----------*/
.customer-id-input {
    padding-top: 38px;
}
/*------end of update customer page ----------*/




/*------start of customer data page ----------*/
section.create-customer-main-area {
    padding: 50px 0;
}
.header-inner {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    min-height: 70px;
}

header.header-area {
    height: 70px;
    box-shadow: 0px 4px 24px #ECECEC;
}

.header-logo img {
    width: 97px;
}

.main-menu {
    display: flex;
}

.header-logo {
    display: inline-block;
}

ul.main-menu li a {
    font-family: 'Mulish';
    font-size: 16px;
    line-height: 26px;
/* identical to box height, or 162% */
    letter-spacing: 0.01em;
    color: #22262B;
    opacity: 0.5;
    transition: .3s ease-in-out;
    display: block;
    position: relative;
}

ul.main-menu li a:last-child {
}

ul.main-menu li {
    margin: 0 20px;
}

ul.main-menu li:last-child {
    margin: 0 0px;
}

ul.main-menu li a:after {
    position: absolute;
    bottom: -22px;
    width: 100%;
    content: "";
    background: #D47C59;
    height: 3px;
    left: 0;
    border-radius: 10px 10px 0px 0px;
    opacity: 0;
    transition: .3s ease-in-out;
}

ul.main-menu li a:hover:after {
    opacity: 1;
}

ul.main-menu li .active:after {
    opacity: 1;
    color:#D47C59;
}

ul.main-menu li .active {
    opacity: 1;
    color:#D47C59;
}
.main-menu li a:hover{
    text-decoration: none;
    opacity: 1;
    color:#D47C59;
}
.title-customer-data h1 {
    font-family: 'Mulish';
    font-size: 30px;
    line-height: 26px;
    letter-spacing: 0.01em;
    color: #22262B;
    font-weight: bold;
    margin-bottom: 40px;
}

.customer-data-main {
    background: #fff;
    box-shadow: 0px 4px 14px rgba(0, 0, 0, 0.06);
    padding: 40px;
    padding-bottom: 10px;
    padding-top: 12px;
}
.single-box-title-data h3 {
    font-family: 'Mulish';
    font-size: 20px;
    line-height: 26px;
    letter-spacing: 0.01em;
    color: #22262B;
    font-weight: 500;
    margin-bottom: 20px;
}
.retail-text {
    font-family: 'Mulish';
    font-size: 26px;
    line-height: 26px;
    letter-spacing: 0.01em;
    text-transform: capitalize;
    color: #22262B;
    font-weight: bold !important;
    margin-top: 30px;
}

.form-input::placeholder {
    color: rgba(26, 32, 61, 0.5);
}
.tel-option {
    position: relative;
}
.tel-option select {
    position: absolute;
    left: 0;
    padding: 8px;
    top: 50%;
    border: none;
    background: none;
    cursor: pointer;
    font-family: 'Mulish';
    font-size: 14px;
    line-height: 20px;
    color: #22262B;
    outline: none;
}
.tel-option input {
    padding-left: 84px;
}
.create-customer-main-area .form-label {
    font-family: 'Mulish';
    font-size: 14px;
    line-height: 20px;
    color: #1a203dc9;
    text-transform: capitalize;
    font-weight: 600;
}
#message {
    height: 106px;
    resize: none;
}
.form-title-radio h3 {
    font-family: 'Mulish';
    font-size: 14px;
    line-height: 20px;
    letter-spacing: 0.04em;
    text-transform: uppercase;
    color: #1A203D;
    font-weight: 500;
    margin-bottom: 17px;
}

.yes-no-box {
    display: flex;
}

.creadit-group-icon .input-group-text {
    background: #fff;
    border-right: none;
}
.custom-input {
    border-left: none;
    padding: 20px  0;
}
.single-yesno .form-group {
    position: relative;
}

.single-yesno input {
    position: absolute;
    top: 3px;
}
.select-icon-absolute {
    position: absolute;
    right: 5%;
    top: 54%;
    pointer-events: none;
}

.select-icon {
    position: relative;
}
.main-data-form .row {
    margin-bottom: 9px;
}
.data-inner-single-item-box {
    margin-bottom: 30px;
}
.no-bottom-margin {
    margin-bottom: 0;
    border-bottom: 1px solid #c4c4c412;
}
.creadit-group-mould {
    position: relative;
}
span.count-btn {
    position: absolute;
    right: 0;
    top: 43%;
    background: #F5F5F5;
    border: 1px solid #CFD0D7;
    box-sizing: border-box;
    border-radius: 2px;
}

span.count-btn .icon-count {
    font-size: 27px;
    margin: 0 10px;
    color: rgba(0, 0, 0, 0.54);
    font-family: 'Mulish';
    cursor: pointer;
}
span.count-btn:after {
    position: absolute;
    right: 50%;
    top: 0;
    height: 100%;
    content: "";
    border: 1px solid #CFD0D7;
}
.file-type {
    font-family: 'Mulish';
    font-size: 12px;
    line-height: 20px;
    color: rgba(26, 32, 61, 0.5);
    opacity: 0.5;
    font-weight: 500;
    text-align: center;
}

.file-field {
    text-align: center;
}

.file-field input {
    background: none !important;
    border: 1;
}

.file-field {
    background: #FFFFFF;
    border: 1px dashed #CFD0D7;
    box-sizing: border-box;
    border-radius: 2px;
    padding: 15px;
}
span.drag-file {
    margin-top: 6px;
    font-family: 'Mulish';
    font-size: 12px;
    line-height: 20px;
    color: #1A203D;
    font-weight: 600;
    display: inline-block;
}
.long-height #message {height: 184px;}
span.add-plus {
    height: 40px;
    width: 40px;
    display: inline-block;
    background: #FFF8F4;
    border-radius: 50%;
    text-align: center;
    color: #D47C59;
    font-size: 24px;
    margin-right: 13px;
    cursor: pointer;
}

.add-mould-column-box {
    font-family: 'Mulish';
    font-size: 14px;
    line-height: 37px;
    letter-spacing: 0.04em;
    text-transform: uppercase;
    color: #D47C59;
    font-weight: 600;
    margin-top: 13px;
    margin-bottom: 35px;
    cursor: pointer;
}


a.btns.btn-data-table {
    font-family: 'Mulish';
    font-size: 16px;
    line-height: 20px;
    text-align: center;
    font-weight: 600;
    background: #D47C59;
    border-radius: 4px;
    padding: 14px 61px;
    color: #fff;
}

.border-btn {
    background: #fff !important;
    color: rgba(26, 32, 61, 0.5) !important;
    margin-right: 15px;
    border: 1px solid #CFD0D7;
    box-sizing: border-box;
    border-radius: 4px;
}
/*------End of customer data page -----*/


/*------report module page start here -----*/
.report-button-screen a.btns.btn-data-table {
    padding: 0 0;
    padding: 14px 47px;
}

.report-page-order {
    background: #fff;
    box-shadow: 0px 4px 14px rgba(0, 0, 0, 0.06);
    padding: 15px;
    padding-bottom: 10px;
    padding-top: 12px;
}
.report-module .table-bordered td, .table-bordered th {
    padding-right: 30px;
}


.report-updated-module .table-bordered td, .table-bordered th {
    padding-right: 19px;
}

/*------report module page end here -----*/


/*----filter page css ------*/
.cusomization-row {
    align-items: center;
}
.filter-data-table a.btns.btn-data-table{
    padding: 10px 33px;
}
.order-form-title {
    background: #fff;
    padding: 20px;
    border-bottom: 1px solid #c4c4c43b;
    box-shadow: 0px 4px 14px rgba(0, 0, 0, 0.06);
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.order-form-title h1 {
    font-family: 'Mulish';
    font-size: 26px;
    line-height: 26px;
    letter-spacing: 0.01em;
    text-transform: capitalize;
    color: #22262B;
    font-weight: bold;
}
.top-button .btn-data-table {
    border: none;
    box-shadow: 0px 0px 10px rgba(209, 209, 209, 0.5);
    text-decoration: none;
}
.header-breadcrumb-left ul {
    display: flex;
}
.header-breadcrumb-left ul li a {
    padding: 10px 30px;
    background: #F3F3F3;
    font-family: 'Mulish';
    font-size: 14px;
    line-height: 20px;
    letter-spacing: 0.04em;
    text-transform: uppercase;
    color: #828282;
    text-decoration: none;
    box-shadow: 0px 0px 10px rgba(209, 209, 209, 0.5);
    position: relative;
}
.white-bg {
    background: #fff !important;
    color: #D47C59 !important;
}

.bread-inner {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}

.single-bread-box {
    margin-bottom: 35px;
}
.header-breadcrumb-left ul li a:after {
    position: absolute;
    right: -14px;
    top: 5px;
    width: 29px;
    height: 29px;
    border-right: 29px solid #f3f3f3;
    content: "";
    border-bottom: 29px solid transparent;
    transform: rotate(45deg);
    z-index: 99;
    margin-bottom: -15px;
}
.header-breadcrumb-left ul li .white-bg:after{
    border-right: 29px solid #fff;
}
.none-box{
    box-shadow: none  !important;
}
/*-----End of filter page css ------*/

/*------Start of create order ------*/
.none-bg-border {
    border: none;
    padding: 0;
}

.customer-details-box-single {
    display: flex;
}
.left-label {
    min-width: 200px;
}

.input-undi {
    width: 100%;
}
.icon-select-2 span.select-icon-absolute {
    top: 17%;
}

.custom-file-input {
  color: transparent;
}
.custom-file-input::-webkit-file-upload-button {
  visibility: hidden;

}
.custom-file-input::before {
  content: 'Select some files';
  color: black;
  display: inline-block;
  background: -webkit-linear-gradient(top, #f9f9f9, #e3e3e3);
  border: 1px solid #999;
  border-radius: 3px;
  padding: 5px 8px;
  outline: none;
  white-space: nowrap;
  -webkit-user-select: none;
  cursor: pointer;
  text-shadow: 1px 1px #fff;
  font-weight: 700;
  font-size: 10pt;
}
.custom-file-input:hover::before {
  border-color: black;
}
.custom-file-input:active {
  outline: 0;
}
.custom-file-input:active::before {
  background: -webkit-linear-gradient(top, #e3e3e3, #f9f9f9); 
}
.custom-file-input{
    opacity: 1 !important;
}
.new-addition, .single-left-check label {
    font-size: 14px !important;
    text-transform: capitalize !important;
    margin-left: 26px;
    margin-top: 10px;
    font-weight: 500 !important;
    color: #1a203d !important;
}
.single-left-check label {
    font-family: "Mulish";
    color: #1a203d9c;
    font-size: 14px !important;
    text-transform: capitalize !important;
    margin-left: 26px;
    margin-top: 10px;
    font-weight: 500;
}
.single-colours-box label{
    font-family: "Mulish";
    color: #1a203d9c;
    font-size: 14px !important;
    text-transform: capitalize !important;
    margin-left: 26px;
    margin-top: 10px;
    font-weight: 500;
}
.right-checkbox-area .custom-control-label {
    position: relative;
    vertical-align: top;
    font-size: 18px;
    text-transform: capitalize;
    font-weight: 600;
    font-family: 'Mulish';
    color: #1a203dc9;
    margin-bottom: 14px;
}
.checkbox-inner label{
    position: relative;
    vertical-align: top;
    font-size: 18px;
    text-transform: capitalize;
    font-weight: 600;
    font-family: 'Mulish';
    color: #1a203dc9;
    margin-bottom: 14px;
}
.custom-checkbox label{
    position: relative;
    vertical-align: top;
    font-size: 18px;
    text-transform: capitalize;
    font-weight: 600;
    font-family: 'Mulish';
    color: #1a203dc9;
    margin-bottom: 14px;
}
/*-------End of create order css ---------*/


/*--------Data filter search result css start-----*/
.bottom-filter-0{
    margin-bottom: 0;
}
.padding-filter-0 {
    padding: 0 !important;
}

.custom-margin a {margin: 0 10px;}
/*------End of data-filter search result ------*/



/*-----Duplicate an order css code start ------*/
.align-modify {
    align-items: center;
}

/*------End of duplicate order css code -----*/


.estimate-flex {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
}
.many-btn {
    display: flex;
    flex-wrap: wrap;
}
.many-btn a{
    margin: 10px 10px;
}

.at-department{
    top: 19%;
}






/*------Start of responsive css -code -----*/

@media(min-width: 1563px){
    .login-left-bg-area{
        min-width: 841px;
    }
}


@media(min-width: 1680px){
    .login-left-bg-area{
        min-width: 959px;
    }
}

@media(min-width: 1920px){
    .login-left-bg-area{
        min-width: 1200px;
        height: 100vh;
    }
}


@media(max-width: 1024px){
    .login-left-bg-area{
        min-width: 500px;
        height: 100vh;
    }
}

/* iPads (portrait and landscape) ----------- */
@media only screen and (min-width : 768px) and (max-width : 1024px) {
/* Styles */
.col-sm-4 {
    max-width: 100%;
    flex: initial;
}










	.three-one-holding span:after {
    border: solid 1px #f5998e;
    width: 4px;
    z-index: -1;
    content: '';
    display: block;
    width: 9px;
    position: absolute;
    bottom: 68%;
    left: 45px;
    height: 123px;
    background: #f5998e;
}
.two-one-holding span:after {
    border: solid 1px #f5998e;
    width: 4px;
    content: '';
    display: block;
    z-index: -1;
    width: 9px;
    position: absolute;
    bottom: 55%;
    left: 45px;
    height: 99px;
    background: #f5998e;
}
.step-one-holding span:after {
    border-bottom: solid 1px #84b565;
    width: 4px;
    content: '';
    display: inline;
    width: 9px;
    position: absolute;
    bottom: 0;
    left: 47px;
    height: 65px;
    background: #84b565;
}
.two-one-holding span:after {
    border: solid 1px #f5998e;
    width: 4px;
    content: '';
    display: block;
    z-index: -1;
    width: 9px;
    position: absolute;
    bottom: 68%;
    left: 47px;
    height: 99px;
    background: #f5998e;
}
	
.step-hodling-checkbox {
    display: flex;
    align-items: center;
    margin-bottom: 48px;
}
.holding-checkbox {
    margin-top: 17px;
    margin-left: 11px;
}
.title-customer-data h1 {
    font-family: 'Mulish';
    font-size: 25px;
  }
  .text-right {
    text-align: left !important;
}
}


@media(max-width: 767px){
	
	.three-one-holding span:after {
    border: solid 1px #f5998e;
    width: 4px;
    z-index: -1;
    content: '';
    display: block;
    width: 2%;
    position: absolute;
    bottom: 68%;
    left: 45px;
    height: 123px;
    background: #f5998e;
}
.two-one-holding span:after {
    border: solid 1px #f5998e;
    width: 4px;
    content: '';
    display: block;
    z-index: -1;
    width: 2%;
    position: absolute;
    bottom: 68%;
    left: 47px;
    height: 49px;
    background: #f5998e;
}
.step-one-holding span:after {
    border-bottom: solid 1px #84b565;
    width: 4px;
    content: '';
    display: inline;
    width: 2%;
    position: absolute;
    bottom: 0;
    left: 47px;
    height: 65px;
    background: #84b565;
}
.two-one-holding span:after {
    border: solid 1px #f5998e;
    width: 4px;
    content: '';
    display: block;
    z-index: -1;
    width: 2%;
    position: absolute;
    bottom: 68%;
    left: 47px;
    height: 99px;
    background: #f5998e;
}
	
.step-hodling-checkbox {
    display: flex;
    align-items: center;
    margin-bottom: 48px;
}
.holding-checkbox {
    margin-top: 17px;
    margin-left: 11px;
}
.title-customer-data h1 {
    font-family: 'Mulish';
    font-size: 25px;
  }
  .text-right {
    text-align: left !important;
}
	
	.customer-details-box-single.customer-id-input {
    display: flex;
}
    .login-left-bg-area{
        min-width: 500px;
        height: 300px;
        margin-bottom: 100px;
        justify-content: center;
    }
    .login-main-inner-section {
        display: block;
    }
    .right-main-login-box {
        padding: 0 100px;
    }
    .login-bottom-logo{
        margin-bottom: -55px;
    }
    .radion-label {
    font-size: 14px !important;
    padding: 0 28px !important;
    padding-right: 0 !important;
}
.create-customer-main-area .form-label {
    color: #1a203d;
    font-weight: 500;
}
.custom-column{
    max-width: 100%;
    flex-basis: 100%;
    width: 100%;
    margin-left: 0;
}
.single-yesno{
    margin-right: 20px;
}
.Outsource-bottom .customer-details-box-single{
    display: block;
}
.dup-order .customer-details-box-single{
    display: flex;
}
.title-select-customer {
    margin-bottom: 23px;
}
.customer-details-box-single {
    margin-bottom: 13px;
}
}


@media(max-width: 414px){
    .customer-details-box-single {
        display: block;
    }
    .dup-order .customer-details-box-single{
     display: flex;
    }
    .left-label {
    min-width: 154px;
}
    .header-menu-area{
        display: none;
    }
    a.btns.btn-data-table{
        display: block;
        width: 100%;
        margin-bottom: 10px;
    }
    .customer-data-main {
        padding: 24px 14px;
        padding-bottom: 5px;
    }
    .header-inner{
        justify-content: center;
    }
    .login-left-bg-area{
        height: 200px;
        margin-bottom: 100px;
        justify-content: center;
    }
    .login-main-inner-section {
        display: block;
    }
    .right-main-login-box {
        padding: 0 30px;
    }
    .login-bottom-logo{
        margin-bottom: -55px;
        margin-left: -69px;
    }
}

@media(max-width: 375px){
    .login-bottom-logo {
        width: 254px;
        height: 124px;
    }
    .login-bottom-logo{
        margin-bottom: -55px;
        margin-left: -125px;
    }
}




</style>

<div class="container">

<div class="main-data-form">

<div class="order-tracking-heading"><div class="title-customer-data">
       <h1>ORDER TRACKING: #14</h1>
     </div></div>
           <div class="row">
             <div class="col-md-6 custom-column">
               <div class="single-box-title-data">
          <div class="status-heading"><span class="status-font">Status</span>: workshop</div>
         </div>
             </div>

             <div class="col-md-6 custom-column">
               <div class="single-box-title-data">
          <div class="status-heading text-right"><span class="status-font">Expected Date</span>: 16-12-2020</div>
         </div>
             </div>

             
           </div>
           
           
           
           
           
         </div>

</div>



<div class="container">
<div class="row">
<div class="list-departments">
    <div class="col-sm-12 mt-5 mb-3">  <h1>List Of The Departments</h1></div>
      
    </div>
    </div>

<div class="row">
<div class="col-sm-4">
<div class="step-hodling"></div>

<div class="step-hodling-checkbox">
<div class="step-one-holding"><span>1</span></div>
<div class="holding-checkbox">
               <div class="custom-control custom-checkbox">
                <input type="checkbox" checked disabled="" class="custom-control-input" id="checked0">
                <label class="custom-control-label" for="checked0">1. Holding in Area</label>
              </div>
              </div>

</div>

</div>

<div class="col-sm-4">
<div class="step-hodling"></div>

<div class="step-hodling-checkbox">
<div class="two-one-holding"><span>2</span></div>
<div class="holding-checkbox">
               <div class="custom-control custom-checkbox">
                <input type="checkbox" disabled="" class="custom-control-input" id="checked2">
                <label class="custom-control-label" for="checked2">2.Design Consultation</label>
              </div>
              </div>

</div>

</div>


<div class="col-sm-4">
<div class="step-hodling"></div>

<div class="step-hodling-checkbox">
<div class="three-one-holding"><span>3</span></div>
<div class="holding-checkbox">
               <div class="custom-control custom-checkbox">
                <input type="checkbox" disabled="" class="custom-control-input" id="checked9">
                <label class="custom-control-label" for="checked9">3.CAD</label>
              </div>
              </div>

</div>

</div>


</div>


<div class="row mt-2">
<div class="col-sm-4">
<div class="step-hodling"></div>

<div class="step-hodling-checkbox">
<div class="three-one-holding"><span>4</span></div>
<div class="holding-checkbox">
               <div class="custom-control custom-checkbox">
                <input type="checkbox" disabled="" class="custom-control-input" id="checked8">
                <label class="custom-control-label" for="checked8">4. CAM (3D MODEL)</label>
              </div>
              </div>

</div>

</div>

<div class="col-sm-4">
<div class="step-hodling"></div>

<div class="step-hodling-checkbox">
<div class="three-one-holding"><span>5</span></div>
<div class="holding-checkbox">
               <div class="custom-control custom-checkbox">
                <input type="checkbox" disabled="" class="custom-control-input" id="checked7">
                <label class="custom-control-label" for="checked7">5.Wax Injection</label>
              </div>
              </div>

</div>

</div>


<div class="col-sm-4">
<div class="step-hodling"></div>

<div class="step-hodling-checkbox">
<div class="three-one-holding"><span>6</span></div>
<div class="holding-checkbox">
               <div class="custom-control custom-checkbox">
                <input type="checkbox" disabled="" class="custom-control-input" id="checked6">
                <label class="custom-control-label" for="checked6">6.Mould Making</label>
              </div>
              </div>

</div>

</div>


</div>

<div class="row mt-2">
<div class="col-sm-4">
<div class="step-hodling"></div>

<div class="step-hodling-checkbox">
<div class="three-one-holding"><span>7</span></div>
<div class="holding-checkbox">
               <div class="custom-control custom-checkbox">
                <input type="checkbox" disabled="" class="custom-control-input" id="checked5">
                <label class="custom-control-label" for="checked5">7.Casting</label>
              </div>
              </div>

</div>

</div>

<div class="col-sm-4">
<div class="step-hodling"></div>

<div class="step-hodling-checkbox">
<div class="two-one-holding"><span>8</span></div>
<div class="holding-checkbox">
               <div class="custom-control custom-checkbox">
                <input type="checkbox" disabled="" class="custom-control-input" id="checked4">
                <label class="custom-control-label" for="checked4">8.Workshop </label>
              </div>
              </div>

</div>

</div>


<div class="col-sm-4">
<div class="step-hodling"></div>

<div class="step-hodling-checkbox">
<div class="two-one-holding"><span>9</span></div>
<div class="holding-checkbox">
               <div class="custom-control custom-checkbox">
                <input type="checkbox" disabled="" class="custom-control-input" id="checked3">
                <label class="custom-control-label" for="checked3">9.Outsource</label>
              </div>
              </div>

</div>

</div>


</div>

<div class="row mt-2">
<div class="col-sm-4">
<div class="step-hodling"></div>

<div class="step-hodling-checkbox">
<div class="three-one-holding"><span>10</span></div>
<div class="holding-checkbox">
               <div class="custom-control custom-checkbox">
                <input type="checkbox" disabled="" class="custom-control-input" id="checked1">
                <label class="custom-control-label" for="checked1">10.Casting</label>
              </div>
              </div>

</div>

</div>


<div class="col-sm-4">




</div>

<div class="col-sm-4">




</div>


</div>

</div>







<section class="create-customer-main-area">
 <form action="">
	 <div class="container" align="center" style="background-color: #98d091;
    text-align: center;
    padding: 2em; color: #ffffff;">
		  <div class="customer-data-inner data-inner-single-item-box create-order-page no-bottom-margin">
		 <h3><strong>ORDER TRACKING : #<?php echo $order_id;?> </strong></h3>
		 </div>
	 </div>
	 
	 <div class="container" align="center" style="background-color: #b5e6ae;
    text-align: left;
    padding: 2em; color: #4E7D48;">
		  <div class="customer-data-inner data-inner-single-item-box create-order-page no-bottom-margin">
			<div class="row">  
			   <div class="col-md-6 custom-column">
		 <h5><strong>Status : </strong><?php echo $status;?> </h5>
			  </div>
			   <div class="col-md-6 custom-column">
		<h5><strong>Expected Date : </strong><?php echo $due_date;?> </h5>	  
			  </div>
			</div>	
		 </div>
	 </div>
	 
   <div class="container">

   <div class="customer-data-inner data-inner-single-item-box create-order-page no-bottom-margin"> <!--Start data -inner single box-->

 <div class="customer-data-main" style="background-color: #F5F5F5;"><!--Start of customer data main-->

      <div class="customer-data-signle-box"><!--Start Customer data single-box-->
         <div class="single-box-title-data">
           <h3 class="retail-text trade-text">List of The Departments</h3>
         </div>
         <div class="main-data-form">
           <div class="row mb-5">
			   
			   
			   
			   <?php
					$d=0;
			        $dc=0;
			   $sqldepart="SELECT * FROM department WHERE order_id='$order_id'";
	        $resultdepart = mysqli_query($con, $sqldepart);  
           while($rowd = mysqli_fetch_assoc($resultdepart))
		   {
			   $department_status=$rowd['department_status'];
			   if($rowd['department_name']=='Holding in Area'){
				   $department_status='done';
			   }
			   $d=$d+1;
			   $dc=$dc+1;
			   ?>
			   <div class="col-md-4 custom-column">
			  <div class="custom-control custom-checkbox">
               
                <div class="imgcircle <?php 
			   if($rowd['department_include']=='yes')
			   { }else{ echo 'not_checked'; } 
			   
			   if($department_status=='done')
			   { echo 'process'; }else{ } ?>" >
                    <!--img src="assets/img/bg.png" alt="confirm order"-->
					<h1 class="cn"><?php echo $dc;?></h1>
            	</div>
				<!--span class="line"></span-->
				<input type="checkbox" disabled="" class="custom-control-input" <?php if($rowd['department_include']=='yes'){ echo 'checked'; } ?> name="<?php echo $rowd['department_name'];?>" id="department_<?php echo $dc;?>" value="yes">
					<label class="custom-control-label" for="department_<?php echo $row['id'];?>"><?php echo $dc;?>. <?php echo $rowd['department_name'];?></label>	
			</div>
				   
				  <span class="line <?php if($department_status=='done')
			   { echo 'process'; }else{ } ?>"></span>
				   
			   </div>
			   
			   
			   
			   <br><br><br><br>
			   <?php		
			  
			   
		   }
			   ?>
			   
			   
         
       </div><!--Start Customer data single-box-->


     </div><!--End of customer data main-->

   </div><!----End data -inner single box-->
 </div>
	   
	  	
	   
	   
	   
	   
	   
	   
 </div>
 </div>
 </form>
</section>
</main>
	


 
<?php include_once('footer.php'); ?>
	   
	   