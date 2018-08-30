<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Vali Admin - Free Bootstrap 4 Admin Template</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin') ?>/css/main.css">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body class="app sidebar-mini rtl">
        <?php $this->load->view('admin/common/header') ?>
        <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
        <?php $this->load->view('admin/common/sidebar') ?>
        <main class="app-content">
            <div class="app-title">
                <div>
                    <h1><i class="fa fa-edit"></i> Form Samples</h1>
                    <p>Sample forms</p>
                </div>
                <ul class="app-breadcrumb breadcrumb">
                    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                    <li class="breadcrumb-item">Forms</li>
                    <li class="breadcrumb-item"><a href="#">Sample Forms</a></li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="tile">
                        <h3 class="tile-title">Vertical Form</h3>
                        <div class="tile-body">
                            <?php if ($this->session->flashdata('normal_success')) : ?>
                                <div class="alert alert-success text-center" role="alert">
                                  <strong><?= $this->session->flashdata('normal_success'); ?></strong>
                                </div>
                            <?php endif ; ?>
                            <?php if ($this->session->flashdata('normal_error')) : ?>
                                <div class="alert alert-danger text-center" role="alert">
                                  <strong><?= $this->session->flashdata('normal_error'); ?></strong>
                                </div>
                            <?php endif ; ?>
                            <?= form_open_multipart('admin/add_new_our/process') ?>
                                <div class="form-group col-md-10">
                                    <label class="control-label">Name : </label>
                                    <input class="form-control" type="text" name="name" placeholder="Enter full name">
                                    <?php if ($this->session->flashdata('validation_name_error')) : ?>
                                        <span><?= $this->session->flashdata('validation_name_error'); ?></span>
                                    <?php endif ; ?>
                                </div>
                                <div class="form-group col-md-10">
                                    <label class="control-label">Website URl : </label>
                                    <input class="form-control" type="text" name="url" placeholder="Enter Website Url">
                                    <?php if ($this->session->flashdata('validation_url_error')) : ?>
                                        <span><?= $this->session->flashdata('validation_url_error'); ?></span>
                                    <?php endif ; ?>
                                </div>
                                <div class="form-group col-md-10">
                                    <label class="control-label">Image : </label>
                                    <input class="form-control" name="image" type="file">
                                </div>
                                <?php if ($this->session->flashdata('validation_image_error')) : ?>
                                        <span><?= $this->session->flashdata('validation_image_error'); ?></span>
                                    <?php endif ; ?>
                                <div class="form-group col-md-3">
                                    <input class="btn btn-primary btn-lg btn-block" type="submit">
                                </div>
                            <?= form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php $this->load->view('admin/common/js') ?>
    </body>
</html>