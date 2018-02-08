@extends('layouts.adminMaster')

@section('title')
  Manage Development Record
@endsection

@section('stylesheets')
<style media="screen">
.card {
  position: relative;
  display: block;
  margin-bottom: 0.75rem;
  background-color: #fff;
  border-radius: 0.25rem;
  border: 1px solid rgba(0, 0, 0, 0.125);
}

.card-block {
  padding: 1.25rem;
}

.card-block::after {
  content: "";
  display: table;
  clear: both;
}

.card-title {
  margin-bottom: 0.75rem;
}

.card-subtitle {
  margin-top: -0.375rem;
  margin-bottom: 0;
}

.card-text:last-child {
  margin-bottom: 0;
}

.card-link:hover {
  text-decoration: none;
}

.card-link + .card-link {
  margin-left: 1.25rem;
}

.card > .list-group:first-child .list-group-item:first-child {
  border-top-right-radius: 0.25rem;
  border-top-left-radius: 0.25rem;
}

.card > .list-group:last-child .list-group-item:last-child {
  border-bottom-right-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem;
}

.card-header {
  padding: 0.75rem 1.25rem;
  margin-bottom: 0;
  background-color: #f5f5f5;
  border-bottom: 1px solid rgba(0, 0, 0, 0.125);
}

.card-header::after {
  content: "";
  display: table;
  clear: both;
}

.card-header:first-child {
  border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0;
}

.card-footer {
  padding: 0.75rem 1.25rem;
  background-color: #f5f5f5;
  border-top: 1px solid rgba(0, 0, 0, 0.125);
}

.card-footer::after {
  content: "";
  display: table;
  clear: both;
}

.card-footer:last-child {
  border-radius: 0 0 calc(0.25rem - 1px) calc(0.25rem - 1px);
}

.card-header-tabs {
  margin-right: -0.625rem;
  margin-bottom: -0.75rem;
  margin-left: -0.625rem;
  border-bottom: 0;
}

.card-header-pills {
  margin-right: -0.625rem;
  margin-left: -0.625rem;
}

.card-primary {
  background-color: #0275d8;
  border-color: #0275d8;
}

.card-primary .card-header,
.card-primary .card-footer {
  background-color: transparent;
}

.card-success {
  background-color: #5cb85c;
  border-color: #5cb85c;
}

.card-success .card-header,
.card-success .card-footer {
  background-color: transparent;
}

.card-info {
  background-color: #5bc0de;
  border-color: #5bc0de;
}

.card-info .card-header,
.card-info .card-footer {
  background-color: transparent;
}

.card-warning {
  background-color: #f0ad4e;
  border-color: #f0ad4e;
}

.card-warning .card-header,
.card-warning .card-footer {
  background-color: transparent;
}

.card-danger {
  background-color: #d9534f;
  border-color: #d9534f;
}

.card-danger .card-header,
.card-danger .card-footer {
  background-color: transparent;
}

.card-outline-primary {
  background-color: transparent;
  border-color: #0275d8;
}

.card-outline-secondary {
  background-color: transparent;
  border-color: #ccc;
}

.card-outline-info {
  background-color: transparent;
  border-color: #5bc0de;
}

.card-outline-success {
  background-color: transparent;
  border-color: #5cb85c;
}

.card-outline-warning {
  background-color: transparent;
  border-color: #f0ad4e;
}

.card-outline-danger {
  background-color: transparent;
  border-color: #d9534f;
}

.card-inverse .card-header,
.card-inverse .card-footer {
  border-color: rgba(255, 255, 255, 0.2);
}

.card-inverse .card-header,
.card-inverse .card-footer,
.card-inverse .card-title,
.card-inverse .card-blockquote {
  color: #fff;
}

.card-inverse .card-link,
.card-inverse .card-text,
.card-inverse .card-subtitle,
.card-inverse .card-blockquote .blockquote-footer {
  color: rgba(255, 255, 255, 0.65);
}

.card-inverse .card-link:focus, .card-inverse .card-link:hover {
  color: #fff;
}

.card-blockquote {
  padding: 0;
  margin-bottom: 0;
  border-left: 0;
}

.card-img {
  border-radius: calc(0.25rem - 1px);
}

.card-img-overlay {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1.25rem;
}

.card-img-top {
  border-top-right-radius: calc(0.25rem - 1px);
  border-top-left-radius: calc(0.25rem - 1px);
}

.card-img-bottom {
  border-bottom-right-radius: calc(0.25rem - 1px);
  border-bottom-left-radius: calc(0.25rem - 1px);
}

@media (min-width: 576px) {
  .card-deck {
    display: table;
    width: 100%;
    margin-bottom: 0.75rem;
    table-layout: fixed;
    border-spacing: 1.25rem 0;
  }
  .card-deck .card {
    display: table-cell;
    margin-bottom: 0;
    vertical-align: top;
  }
  .card-deck-wrapper {
    margin-right: -1.25rem;
    margin-left: -1.25rem;
  }
}

@media (min-width: 576px) {
  .card-group {
    display: table;
    width: 100%;
    table-layout: fixed;
  }
  .card-group .card {
    display: table-cell;
    vertical-align: top;
  }
  .card-group .card + .card {
    margin-left: 0;
    border-left: 0;
  }
  .card-group .card:first-child {
    border-bottom-right-radius: 0;
    border-top-right-radius: 0;
  }
  .card-group .card:first-child .card-img-top {
    border-top-right-radius: 0;
  }
  .card-group .card:first-child .card-img-bottom {
    border-bottom-right-radius: 0;
  }
  .card-group .card:last-child {
    border-bottom-left-radius: 0;
    border-top-left-radius: 0;
  }
  .card-group .card:last-child .card-img-top {
    border-top-left-radius: 0;
  }
  .card-group .card:last-child .card-img-bottom {
    border-bottom-left-radius: 0;
  }
  .card-group .card:not(:first-child):not(:last-child) {
    border-radius: 0;
  }
  .card-group .card:not(:first-child):not(:last-child) .card-img-top,
  .card-group .card:not(:first-child):not(:last-child) .card-img-bottom {
    border-radius: 0;
  }
}

@media (min-width: 576px) {
  .card-columns {
    -webkit-column-count: 3;
       -moz-column-count: 3;
            column-count: 3;
    -webkit-column-gap: 1.25rem;
       -moz-column-gap: 1.25rem;
            column-gap: 1.25rem;
  }
  .card-columns .card {
    display: inline-block;
    width: 100%;
  }
}
.text-xs-center {
  text-align: center !important;
}
</style>
@endsection
@section('header')
  <b>Manage Profile and Security Details</b>
@endsection
@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-12">

      </div>
    </div><!--/.Content-->

    @include('admin-dashboard.pages.admins.edit-profile-modal')

        <div class="col-lg-12">
          <div class="row">
            <div class="col-md-5">
              <h2><i class="fa fa-user"></i> Your Profile Settings</h2>
              <p>Manage your profile details here.</p>
            </div>
            <div class="col-md-7">
              <div class="card">
                <div class="card-block" data-toggle="modal" data-target="#profile" style="cursor: pointer;">
                  <div class="col-lg-4">
                      <b>Manage Profile</b>
                  </div>
                  <div class="col-lg-6">
                    <p class="text-muted">Change your profile details such as username, email address, etc.</p>
                  </div>
                  <div class="pull-right">
                    <i class="fa fa-angle-right prefix"></i>
                  </div>
                </div>
              <hr>
              </div>
            </div>
          </div>
        <hr>
          <div class="row">
            <div class="col-md-5">
              <h2><i class="fa fa-wrench"></i> Your Security Settings</h2>
              <p>Manage/Reset your password here.</p>
                <i class="fa fa-info"></i><em class="text-primary"> Last Updated: {{date('F j, Y - h:i a', strtotime(Auth::user()->updated_at))}}</em>
            </div>
            <div class="col-md-7">
              <div class="card">
                <div class="card-block" data-toggle="modal" data-target="#password" style="cursor: pointer;">
                  <div class="col-lg-4">
                      <b>Change Password</b>
                  </div>
                  <div class="col-lg-6">
                    <p class="text-muted">Change your password often for a more secure access to account.</p>
                  </div>
                  <div class="pull-right">
                    <i class="fa fa-angle-right prefix"></i>
                  </div>
                </div>
              <hr>
              </div>
            </div>
          </div>
        </div>
  </div>
@endsection

@section('javascript')
  <script type="text/javascript">
      $(document).on("click", ".cancel", function(e) {
            confirm("Are you sure you want to cancel update?");
      });
      $(document).on("click", ".submit", function(e) {
              confirm("Confirm and Save Data?");
      });
  </script>
@endsection
