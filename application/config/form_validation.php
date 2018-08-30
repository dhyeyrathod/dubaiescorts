<?php
$config = array(
                 'registration' => array(
                                    array(
                                            'field' => 'name',
                                            'label' => 'Name',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'email',
                                            'label' => 'Email',
                                            'rules' => 'required|valid_email|is_unique[escorts_profile.email]'
                                         ),
                                    array(
                                            'field' => 'telephone',
                                            'label' => 'Telephone',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'website',
                                            'label' => 'Website',
                                            'rules' => 'required|valid_url|is_unique[escorts_profile.website]'
                                         ),
                                    array(
                                            'field' => 'provider_type',
                                            'label' => 'Provider Type',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'gender',
                                            'label' => 'Gender',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'sexual_orientation',
                                            'label' => 'Sexual Orientation',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'country',
                                            'label' => 'Country',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'state',
                                            'label' => 'State',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'city',
                                            'label' => 'City',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'description',
                                            'label' => 'Description',
                                            'rules' => 'required'
                                         )  
                                    )
                 
               );
