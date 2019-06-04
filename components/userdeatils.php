<!DOCTYPE html>
<html>

<head>
  <title>Inventery</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i,800&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="./../assets/css/main.css" />

</head>

<body>
  <header class="hh1-header-sections">
    <nav>
      <div class="nav-wrapper">
        <a href="#" class="brand-logo">ANAND LTD.</a>
      </div>

    </nav>

  </header>
  <div class="main-sections">
    <div class="h1-header-top-sections">
      <span class="headings-items">
        Users
      </span>
    </div>
    <div class="main-tabs-sections">
      <div class="row1">
        <div class="tabs-t12">
          <ul class="tabs">
            <li class="tab t1-tabs"><a href="#test1" class="active">Sales</a></li>
            <li class="tab t1-tabs"><a href="#test2">Purchase</a></li>
            <li class="tab t1-tabs"><a href="#test3">Stock</a></li>
            <li class="tab t1-tabs"><a href="#test4">Firm</a></li>
            <li class="tab t1-tabs"><a class="active" href="#test5">Staff</a></li>
            <li class="tab t1-tabs"><a href="#test6">Block</a></li>
          </ul>
        </div>
        <div class="contents-sections">
          <div id="test1" class="tabs-t1">
            <div class="sales-items">
              <table class="highlight">
                <thead>
                  <tr>
                    <th>S.NO</th>
                    <th>Bill No</th>
                    <th>Date</th>
                    <th>Customer</th>
                    <th>Quantity</th>
                    <th>Amount</th>
                    <th>Status</th>
                    <th>Details</th>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <td>1</td>
                    <td>123</td>
                    <td class="date-settings">
                      <input type="text" class="datepicker">
                    </td>
                    <td>Pritam Kumar Soni</td>
                    <td>600</td>
                    <td>80000</td>
                    <td>
                      <span class="paid-pending">
                        Paid
                      </span>
                    </td>
                    <td>
                      <a href="#modal1" class="waves-effect waves-light btn modal-trigger">View</a>
                    </td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>123</td>
                    <td class="date-settings">
                      <input type="text" class="datepicker">
                    </td>
                    <td>Pritam Kumar Soni</td>
                    <td>600</td>
                    <td>80000</td>
                    <td>
                      <span class="paid-pending">
                        Pending
                      </span>
                    </td>
                    <td>
                      <a class="waves-effect waves-light btn">View</a>
                    </td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>123</td>
                    <td class="date-settings">
                      <input type="text" class="datepicker">
                    </td>
                    <td>Pritam Kumar Soni</td>
                    <td>600</td>
                    <td>80000</td>
                    <td>
                      <span class="paid-pending">
                        Pending
                      </span>
                    </td>
                    <td>
                      <a class="waves-effect waves-light btn">View</a>
                    </td>
                  </tr>

                  <tr>
                    <td>1</td>
                    <td>123</td>
                    <td class="date-settings">
                      <input type="text" class="datepicker">
                    </td>
                    <td>Pritam Kumar Soni</td>
                    <td>600</td>
                    <td>80000</td>
                    <td>
                      <span class="paid-pending">
                        Pending
                      </span>
                    </td>
                    <td>
                      <a class="waves-effect waves-light btn">View</a>
                    </td>
                  </tr>

                  <tr>
                    <td>1</td>
                    <td>123</td>
                    <td class="date-settings">
                      <input type="text" class="datepicker">
                    </td>
                    <td>Pritam Kumar Soni</td>
                    <td>600</td>
                    <td>80000</td>
                    <td>
                      <span class="paid-pending">
                        Pending
                      </span>
                    </td>
                    <td>
                      <a class="waves-effect waves-light btn">View</a>
                    </td>
                  </tr>


                </tbody>
              </table>
            </div>
          </div>
          <div id="test2" class="tabs-t1">Purchase</div>
          <div id="test3" class="tabs-t1">Stock</div>
          <div id="test4" class="tabs-t1">Firm</div>
          <div id="test5" class="tabs-t1">Staff</div>
          <div id="test6" class="tabs-t1">Block</div>
        </div>

      </div>
    </div>
  </div>
  <div class="footer-sections">

  </div>


</body>
<div id="modal1" class="modal view-details-modals">
  <div class="modal-content">
    <div class="modal-vew-details">
      <span class="user-names-details">
        Anand PVT.
      </span>
    </div>
    <div class="user-info-details-items">
      <form class="user-internal-items">
        <div class="user-each-items-list">
          <div class="input-field col s12">
            <input id="last_name1" type="text" class="validate">
            <label for="last_name1">Enter Bill No</label>
          </div>
          <div class="input-field  col s12">
            <input id="last_name2" type="text" class="validate">
            <label for="last_name2">Customer Name</label>
          </div>
          <div class="input-field col s12">
            <input id="last_name3" type="text" class="validate">
            <label for="last_name3">Enter GST Number</label>
          </div>
          <div class="input-field col s12">
            <textarea id="textarea1" class="materialize-textarea"></textarea>
            <label for="textarea1">Address</label>
          </div>
        </div>
      </form>
      <div class="data-display-itmes">
        <div class="sales-items">
          <table class="highlight">
            <thead>
              <tr>
                <th>S.NO</th>
                <th>Product Desc.</th>
                <th>Quantity</th>
                <th>Amount</th>
                <th>Status</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>1</td>
                <td>bjfkjdsbgfjkbdsfbd</td>
                <td>12000</td>
                <td>600</td>
                <td>
                  <span class="paid">
                    Paid
                  </span>
                </td>

              </tr>
              <tr>
                <td>1</td>
                <td>bjfkjdsbgfjkbdsfbd</td>
                <td>12000</td>
                <td>600</td>
                <td>
                  <span class="unpaid">
                    Unpaid
                  </span>
                </td>

              </tr>


            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="modal-footer custom-footers">
    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="./../assets/js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</html>