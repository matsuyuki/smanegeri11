<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/admin/nilai2')) {
            // nilai2
            if (rtrim($pathinfo, '/') === '/admin/nilai2') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'nilai2');
                }

                return array (  '_controller' => 'SMA\\SMABundle\\Controller\\Nilai2Controller::indexAction',  '_route' => 'nilai2',);
            }

            // nilai2_show
            if (preg_match('#^/admin/nilai2/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nilai2_show')), array (  '_controller' => 'SMA\\SMABundle\\Controller\\Nilai2Controller::showAction',));
            }

            // nilai2_new
            if ($pathinfo === '/admin/nilai2/new') {
                return array (  '_controller' => 'SMA\\SMABundle\\Controller\\Nilai2Controller::newAction',  '_route' => 'nilai2_new',);
            }

            // nilai2_create
            if ($pathinfo === '/admin/nilai2/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_nilai2_create;
                }

                return array (  '_controller' => 'SMA\\SMABundle\\Controller\\Nilai2Controller::createAction',  '_route' => 'nilai2_create',);
            }
            not_nilai2_create:

            // nilai2_edit
            if (preg_match('#^/admin/nilai2/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nilai2_edit')), array (  '_controller' => 'SMA\\SMABundle\\Controller\\Nilai2Controller::editAction',));
            }

            // nilai2_update
            if (preg_match('#^/admin/nilai2/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_nilai2_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nilai2_update')), array (  '_controller' => 'SMA\\SMABundle\\Controller\\Nilai2Controller::updateAction',));
            }
            not_nilai2_update:

            // nilai2_delete
            if (preg_match('#^/admin/nilai2/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_nilai2_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nilai2_delete')), array (  '_controller' => 'SMA\\SMABundle\\Controller\\Nilai2Controller::deleteAction',));
            }
            not_nilai2_delete:

        }

        if (0 === strpos($pathinfo, '/home')) {
            // index_facebook
            if ($pathinfo === '/home/guest') {
                return array (  '_controller' => 'SMA\\SMABundle\\Controller\\FacebookController::indexAction',  '_route' => 'index_facebook',);
            }

            // showmember
            if ($pathinfo === '/home/showmember') {
                return array (  '_controller' => 'SMA\\SMABundle\\Controller\\PublicController::showmemberAction',  '_route' => 'showmember',);
            }

            // memberedit
            if (0 === strpos($pathinfo, '/home/memberedit') && preg_match('#^/home/memberedit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'memberedit')), array (  '_controller' => 'SMA\\SMABundle\\Controller\\PublicController::membereditAction',));
            }

        }

        // welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'welcome');
            }

            return array (  '_controller' => 'SMA\\SMABundle\\Controller\\PublicController::welcomeAction',  '_route' => 'welcome',);
        }

        if (0 === strpos($pathinfo, '/fb')) {
            // logout_fb
            if ($pathinfo === '/fb/logout') {
                return array (  '_controller' => 'SMA\\SMABundle\\Controller\\PublicController::welcomeAction',  '_route' => 'logout_fb',);
            }

            // about2
            if ($pathinfo === '/fb/about') {
                return array (  '_controller' => 'SMA\\SMABundle\\Controller\\FacebookController::about2Action',  '_route' => 'about2',);
            }

            // profil2
            if ($pathinfo === '/fb/profil') {
                return array (  '_controller' => 'SMA\\SMABundle\\Controller\\FacebookController::profil2Action',  '_route' => 'profil2',);
            }

        }

        // about
        if ($pathinfo === '/about') {
            return array (  '_controller' => 'SMA\\SMABundle\\Controller\\PublicController::about2Action',  '_route' => 'about',);
        }

        // profil
        if ($pathinfo === '/profil') {
            return array (  '_controller' => 'SMA\\SMABundle\\Controller\\PublicController::profil2Action',  '_route' => 'profil',);
        }

        if (0 === strpos($pathinfo, '/home')) {
            // check_pegawai
            if ($pathinfo === '/home/pegawai') {
                return array (  '_controller' => 'SMA\\SMABundle\\Controller\\PublicController::pegawaiAction',  '_route' => 'check_pegawai',);
            }

            if (0 === strpos($pathinfo, '/home/kelas')) {
                // check_kelas
                if ($pathinfo === '/home/kelas') {
                    return array (  '_controller' => 'SMA\\SMABundle\\Controller\\PublicController::kelasAction',  '_route' => 'check_kelas',);
                }

                if (0 === strpos($pathinfo, '/home/kelas/10-')) {
                    // check_pegawai_satu
                    if ($pathinfo === '/home/kelas/10-1') {
                        return array (  '_controller' => 'SMA\\SMABundle\\Controller\\PublicController::kelas1Action',  '_route' => 'check_pegawai_satu',);
                    }

                    // check_pegawai_satu1
                    if ($pathinfo === '/home/kelas/10-2') {
                        return array (  '_controller' => 'SMA\\SMABundle\\Controller\\PublicController::kelas11Action',  '_route' => 'check_pegawai_satu1',);
                    }

                }

                if (0 === strpos($pathinfo, '/home/kelas/2IP')) {
                    if (0 === strpos($pathinfo, '/home/kelas/2IPA')) {
                        // check_pegawai_dua1
                        if ($pathinfo === '/home/kelas/2IPA1') {
                            return array (  '_controller' => 'SMA\\SMABundle\\Controller\\PublicController::kelas211Action',  '_route' => 'check_pegawai_dua1',);
                        }

                        // check_pegawai_dua2
                        if ($pathinfo === '/home/kelas/2IPA2') {
                            return array (  '_controller' => 'SMA\\SMABundle\\Controller\\PublicController::kelas212Action',  '_route' => 'check_pegawai_dua2',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/home/kelas/2IPS')) {
                        // check_pegawai_dua3
                        if ($pathinfo === '/home/kelas/2IPS1') {
                            return array (  '_controller' => 'SMA\\SMABundle\\Controller\\PublicController::kelas221Action',  '_route' => 'check_pegawai_dua3',);
                        }

                        // check_pegawai_dua4
                        if ($pathinfo === '/home/kelas/2IPS2') {
                            return array (  '_controller' => 'SMA\\SMABundle\\Controller\\PublicController::kelas222Action',  '_route' => 'check_pegawai_dua4',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/home/kelas/3IP')) {
                    if (0 === strpos($pathinfo, '/home/kelas/3IPA')) {
                        // check_pegawai_tiga1
                        if ($pathinfo === '/home/kelas/3IPA1') {
                            return array (  '_controller' => 'SMA\\SMABundle\\Controller\\PublicController::kelas311Action',  '_route' => 'check_pegawai_tiga1',);
                        }

                        // check_pegawai_tiga2
                        if ($pathinfo === '/home/kelas/3IPA2') {
                            return array (  '_controller' => 'SMA\\SMABundle\\Controller\\PublicController::kelas312Action',  '_route' => 'check_pegawai_tiga2',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/home/kelas/3IPS')) {
                        // check_pegawai_tiga3
                        if ($pathinfo === '/home/kelas/3IPS1') {
                            return array (  '_controller' => 'SMA\\SMABundle\\Controller\\PublicController::kelas321Action',  '_route' => 'check_pegawai_tiga3',);
                        }

                        // check_pegawai_tiga4
                        if ($pathinfo === '/home/kelas/3IPS2') {
                            return array (  '_controller' => 'SMA\\SMABundle\\Controller\\PublicController::kelas322Action',  '_route' => 'check_pegawai_tiga4',);
                        }

                    }

                }

            }

            if (0 === strpos($pathinfo, '/home/pegawai')) {
                // check_kuis_kelas_satu
                if ($pathinfo === '/home/pegawai/wali kelas') {
                    return array (  '_controller' => 'SMA\\SMABundle\\Controller\\PublicController::pegawai1Action',  '_route' => 'check_kuis_kelas_satu',);
                }

                // check_kuis_kelas_dua
                if ($pathinfo === '/home/pegawai/guru') {
                    return array (  '_controller' => 'SMA\\SMABundle\\Controller\\PublicController::pegawai2Action',  '_route' => 'check_kuis_kelas_dua',);
                }

                // check_kuis_kelas_tiga
                if ($pathinfo === '/home/pegawai/pegawai') {
                    return array (  '_controller' => 'SMA\\SMABundle\\Controller\\PublicController::pegawai3Action',  '_route' => 'check_kuis_kelas_tiga',);
                }

            }

            // showberita
            if (preg_match('#^/home/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'showberita')), array (  '_controller' => 'SMA\\SMABundle\\Controller\\PublicController::showberitaAction',));
            }

        }

        // login_homepage
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'SMA\\SMABundle\\Controller\\PublicController::login2Action',  '_route' => 'login_homepage',);
        }

        // logout
        if ($pathinfo === '/home/logout') {
            return array (  '_controller' => 'SMA\\SMABundle\\Controller\\PublicController::welcomeAction',  '_route' => 'logout',);
        }

        // login_homepage1
        if (rtrim($pathinfo, '/') === '/-') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'login_homepage1');
            }

            return array (  '_controller' => 'SMA\\SMABundle\\Controller\\PublicController::loginAction',  '_route' => 'login_homepage1',);
        }

        if (0 === strpos($pathinfo, '/home')) {
            // SMASMABundle_homepage
            if ($pathinfo === '/home') {
                return array (  '_controller' => 'SMA\\SMABundle\\Controller\\PublicController::indexAction',  '_route' => 'SMASMABundle_homepage',);
            }

            // SMASMABundle_about
            if ($pathinfo === '/home/about') {
                return array (  '_controller' => 'SMA\\SMABundle\\Controller\\PublicController::aboutAction',  '_route' => 'SMASMABundle_about',);
            }

            // SMASMABundle_profil
            if ($pathinfo === '/home/profil') {
                return array (  '_controller' => 'SMA\\SMABundle\\Controller\\PublicController::profilAction',  '_route' => 'SMASMABundle_profil',);
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/pegawai')) {
                // page_simpanguru
                if ($pathinfo === '/admin/pegawai/tambah_guru') {
                    return array (  '_controller' => 'SMA\\SMABundle\\Controller\\PegawaiController::simpanguruAction',  '_route' => 'page_simpanguru',);
                }

                // pegawai
                if (rtrim($pathinfo, '/') === '/admin/pegawai') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'pegawai');
                    }

                    return array (  '_controller' => 'SMA\\SMABundle\\Controller\\PegawaiController::indexAction',  '_route' => 'pegawai',);
                }

                // pegawai_show
                if (preg_match('#^/admin/pegawai/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pegawai_show')), array (  '_controller' => 'SMA\\SMABundle\\Controller\\PegawaiController::showAction',));
                }

                if (0 === strpos($pathinfo, '/admin/pegawai/new')) {
                    // pegawai_new
                    if ($pathinfo === '/admin/pegawai/new') {
                        return array (  '_controller' => 'SMA\\SMABundle\\Controller\\PegawaiController::newAction',  '_route' => 'pegawai_new',);
                    }

                    // pegawai_form
                    if ($pathinfo === '/admin/pegawai/new') {
                        return array (  '_controller' => 'SMA\\SMABundle\\Controller\\PegawaiController::formpegawaiAction',  '_route' => 'pegawai_form',);
                    }

                }

                // pegawai_create
                if ($pathinfo === '/admin/pegawai/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_pegawai_create;
                    }

                    return array (  '_controller' => 'SMA\\SMABundle\\Controller\\PegawaiController::createAction',  '_route' => 'pegawai_create',);
                }
                not_pegawai_create:

                // pegawai_edit
                if (preg_match('#^/admin/pegawai/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pegawai_edit')), array (  '_controller' => 'SMA\\SMABundle\\Controller\\PegawaiController::editAction',));
                }

                // pegawai_update
                if (preg_match('#^/admin/pegawai/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_pegawai_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pegawai_update')), array (  '_controller' => 'SMA\\SMABundle\\Controller\\PegawaiController::updateAction',));
                }
                not_pegawai_update:

                // pegawai_delete
                if (preg_match('#^/admin/pegawai/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_pegawai_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pegawai_delete')), array (  '_controller' => 'SMA\\SMABundle\\Controller\\PegawaiController::deleteAction',));
                }
                not_pegawai_delete:

            }

            if (0 === strpos($pathinfo, '/admin/siswa')) {
                // page_simpansiswa
                if ($pathinfo === '/admin/siswa/tambah_siswa') {
                    return array (  '_controller' => 'SMA\\SMABundle\\Controller\\SiswaController::simpansiswaAction',  '_route' => 'page_simpansiswa',);
                }

                // siswa
                if (rtrim($pathinfo, '/') === '/admin/siswa') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'siswa');
                    }

                    return array (  '_controller' => 'SMA\\SMABundle\\Controller\\SiswaController::indexAction',  '_route' => 'siswa',);
                }

                // siswa_show
                if (preg_match('#^/admin/siswa/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'siswa_show')), array (  '_controller' => 'SMA\\SMABundle\\Controller\\SiswaController::showAction',));
                }

                // siswa_new
                if ($pathinfo === '/admin/siswa/new') {
                    return array (  '_controller' => 'SMA\\SMABundle\\Controller\\SiswaController::newAction',  '_route' => 'siswa_new',);
                }

                // siswa_create
                if ($pathinfo === '/admin/siswa/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_siswa_create;
                    }

                    return array (  '_controller' => 'SMA\\SMABundle\\Controller\\SiswaController::createAction',  '_route' => 'siswa_create',);
                }
                not_siswa_create:

                // siswa_edit
                if (preg_match('#^/admin/siswa/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'siswa_edit')), array (  '_controller' => 'SMA\\SMABundle\\Controller\\SiswaController::editAction',));
                }

                // siswa_update
                if (preg_match('#^/admin/siswa/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_siswa_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'siswa_update')), array (  '_controller' => 'SMA\\SMABundle\\Controller\\SiswaController::updateAction',));
                }
                not_siswa_update:

                // siswa_delete
                if (preg_match('#^/admin/siswa/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_siswa_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'siswa_delete')), array (  '_controller' => 'SMA\\SMABundle\\Controller\\SiswaController::deleteAction',));
                }
                not_siswa_delete:

            }

            if (0 === strpos($pathinfo, '/admin/berita')) {
                // page_simpanberita
                if ($pathinfo === '/admin/berita/tambah_berita') {
                    return array (  '_controller' => 'SMA\\SMABundle\\Controller\\BeritaController::simpanberitaAction',  '_route' => 'page_simpanberita',);
                }

                // berita
                if (rtrim($pathinfo, '/') === '/admin/berita') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'berita');
                    }

                    return array (  '_controller' => 'SMA\\SMABundle\\Controller\\BeritaController::indexAction',  '_route' => 'berita',);
                }

                // berita_show
                if (preg_match('#^/admin/berita/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'berita_show')), array (  '_controller' => 'SMA\\SMABundle\\Controller\\BeritaController::showAction',));
                }

                // berita_new
                if ($pathinfo === '/admin/berita/new') {
                    return array (  '_controller' => 'SMA\\SMABundle\\Controller\\BeritaController::newAction',  '_route' => 'berita_new',);
                }

                // berita_create
                if ($pathinfo === '/admin/berita/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_berita_create;
                    }

                    return array (  '_controller' => 'SMA\\SMABundle\\Controller\\BeritaController::createAction',  '_route' => 'berita_create',);
                }
                not_berita_create:

                // berita_edit
                if (0 === strpos($pathinfo, '/admin/berita/edit') && preg_match('#^/admin/berita/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'berita_edit')), array (  '_controller' => 'SMA\\SMABundle\\Controller\\BeritaController::editAction',));
                }

                // berita_update
                if (preg_match('#^/admin/berita/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_berita_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'berita_update')), array (  '_controller' => 'SMA\\SMABundle\\Controller\\BeritaController::updateAction',));
                }
                not_berita_update:

                // berita_delete
                if (preg_match('#^/admin/berita/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_berita_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'berita_delete')), array (  '_controller' => 'SMA\\SMABundle\\Controller\\BeritaController::deleteAction',));
                }
                not_berita_delete:

            }

            // smasma_homepage
            if ($pathinfo === '/admin/home') {
                return array (  '_controller' => 'SMA\\SMABundle\\Controller\\AdminController::indexAction',  '_route' => 'smasma_homepage',);
            }

            // smasma_admin_homepage
            if ($pathinfo === '/admin') {
                return array (  '_controller' => 'SMA\\SMABundle\\Controller\\AdminController::adminAction',  '_route' => 'smasma_admin_homepage',);
            }

        }

        // smasma_logout
        if ($pathinfo === '/logout') {
            return array (  '_controller' => 'SMA\\SMABundle\\Controller\\AdminController::logoutAction',  '_route' => 'smasma_logout',);
        }

        if (0 === strpos($pathinfo, '/admin/member')) {
            // page_simpanmember
            if ($pathinfo === '/admin/member/tambah_member') {
                return array (  '_controller' => 'SMA\\SMABundle\\Controller\\AdminController::simpanmemberAction',  '_route' => 'page_simpanmember',);
            }

            // member
            if ($pathinfo === '/admin/member') {
                return array (  '_controller' => 'SMA\\SMABundle\\Controller\\AdminController::mindexAction',  '_route' => 'member',);
            }

            // member_edit
            if (0 === strpos($pathinfo, '/admin/member/edit') && preg_match('#^/admin/member/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'member_edit')), array (  '_controller' => 'SMA\\SMABundle\\Controller\\AdminController::editAction',));
            }

            // member_delete
            if (preg_match('#^/admin/member/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_member_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'member_delete')), array (  '_controller' => 'SMA\\SMABundle\\Controller\\AdminController::deleteAction',));
            }
            not_member_delete:

            // member_show
            if (preg_match('#^/admin/member/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'member_show')), array (  '_controller' => 'SMA\\SMABundle\\Controller\\AdminController::showAction',));
            }

            // member_new
            if ($pathinfo === '/admin/member/new') {
                return array (  '_controller' => 'SMA\\SMABundle\\Controller\\AdminController::newAction',  '_route' => 'member_new',);
            }

        }

        if (0 === strpos($pathinfo, '/Admin')) {
            if (0 === strpos($pathinfo, '/Admin/Absensi')) {
                // page_simpanabsensi
                if ($pathinfo === '/Admin/Absensi/tambah_absensi') {
                    return array (  '_controller' => 'SMA\\SMABundle\\Controller\\AbsensiController::simpanabsensiAction',  '_route' => 'page_simpanabsensi',);
                }

                // absensi
                if (rtrim($pathinfo, '/') === '/Admin/Absensi') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'absensi');
                    }

                    return array (  '_controller' => 'SMA\\SMABundle\\Controller\\AbsensiController::indexAction',  '_route' => 'absensi',);
                }

                // absensi_show
                if (preg_match('#^/Admin/Absensi/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'absensi_show')), array (  '_controller' => 'SMA\\SMABundle\\Controller\\AbsensiController::showAction',));
                }

                // absensi_new
                if ($pathinfo === '/Admin/Absensi/new') {
                    return array (  '_controller' => 'SMA\\SMABundle\\Controller\\AbsensiController::newAction',  '_route' => 'absensi_new',);
                }

                // absensi_create
                if ($pathinfo === '/Admin/Absensi/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_absensi_create;
                    }

                    return array (  '_controller' => 'SMA\\SMABundle\\Controller\\AbsensiController::createAction',  '_route' => 'absensi_create',);
                }
                not_absensi_create:

                // absensi_edit
                if (0 === strpos($pathinfo, '/Admin/Absensi/edit') && preg_match('#^/Admin/Absensi/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'absensi_edit')), array (  '_controller' => 'SMA\\SMABundle\\Controller\\AbsensiController::editAction',));
                }

                // absensi_update
                if (preg_match('#^/Admin/Absensi/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_absensi_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'absensi_update')), array (  '_controller' => 'SMA\\SMABundle\\Controller\\AbsensiController::updateAction',));
                }
                not_absensi_update:

                // absensi_delete
                if (preg_match('#^/Admin/Absensi/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'absensi_delete')), array (  '_controller' => 'SMA\\SMABundle\\Controller\\AbsensiController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/Admin/Nilai')) {
                // nilai
                if (rtrim($pathinfo, '/') === '/Admin/Nilai') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'nilai');
                    }

                    return array (  '_controller' => 'SMA\\SMABundle\\Controller\\NilaiController::indexAction',  '_route' => 'nilai',);
                }

                // nilai_show
                if (preg_match('#^/Admin/Nilai/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'nilai_show')), array (  '_controller' => 'SMA\\SMABundle\\Controller\\NilaiController::showAction',));
                }

                // nilai_new
                if ($pathinfo === '/Admin/Nilai/new') {
                    return array (  '_controller' => 'SMA\\SMABundle\\Controller\\NilaiController::newAction',  '_route' => 'nilai_new',);
                }

                // nilai_create
                if ($pathinfo === '/Admin/Nilai/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_nilai_create;
                    }

                    return array (  '_controller' => 'SMA\\SMABundle\\Controller\\NilaiController::createAction',  '_route' => 'nilai_create',);
                }
                not_nilai_create:

                // nilai_edit
                if (0 === strpos($pathinfo, '/Admin/Nilai/edit') && preg_match('#^/Admin/Nilai/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'nilai_edit')), array (  '_controller' => 'SMA\\SMABundle\\Controller\\NilaiController::editAction',));
                }

                // nilai_update
                if (preg_match('#^/Admin/Nilai/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_nilai_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'nilai_update')), array (  '_controller' => 'SMA\\SMABundle\\Controller\\NilaiController::updateAction',));
                }
                not_nilai_update:

                // nilai_delete
                if (preg_match('#^/Admin/Nilai/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'nilai_delete')), array (  '_controller' => 'SMA\\SMABundle\\Controller\\NilaiController::deleteAction',));
                }

            }

        }

        // page_simpannilai
        if ($pathinfo === '/admin/Nilai/tambah_nilai') {
            return array (  '_controller' => 'SMA\\SMABundle\\Controller\\NilaiController::simpannilaiAction',  '_route' => 'page_simpannilai',);
        }

        if (0 === strpos($pathinfo, '/home')) {
            // check_absensi1
            if ($pathinfo === '/home/absensi/10-2') {
                return array (  '_controller' => 'SMA\\SMABundle\\Controller\\PublicController::absensiAction',  '_route' => 'check_absensi1',);
            }

            // check_nilai
            if ($pathinfo === '/home/nilai/6110801') {
                return array (  '_controller' => 'SMA\\SMABundle\\Controller\\PublicController::nilaiAction',  '_route' => 'check_nilai',);
            }

            // download
            if ($pathinfo === '/home/download') {
                return array (  '_controller' => 'SMA\\SMABundle\\Controller\\PublicController::downloadAction',  '_route' => 'download',);
            }

        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
