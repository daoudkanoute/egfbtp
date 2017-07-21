<?php

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/*
 * appProdProjectContainer.
 *
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 */
class appProdProjectContainer extends Container
{
    private $parameters;
    private $targetDirs = array();

    /*
     * Constructor.
     */
    public function __construct()
    {
        $dir = __DIR__;
        for ($i = 1; $i <= 2; ++$i) {
            $this->targetDirs[$i] = $dir = dirname($dir);
        }
        $this->parameters = $this->getDefaultParameters();

        $this->services = array();
        $this->methodMap = array(
            'annotation_reader' => 'getAnnotationReaderService',
            'annotations.reader' => 'getAnnotations_ReaderService',
            'app.apprenant.code' => 'getApp_Apprenant_CodeService',
            'app.form.qcm_exam' => 'getApp_Form_QcmExamService',
            'app.form.type.choices_images' => 'getApp_Form_Type_ChoicesImagesService',
            'app.services.qcm' => 'getApp_Services_QcmService',
            'app.twig.extension' => 'getApp_Twig_ExtensionService',
            'app.upload_listener' => 'getApp_UploadListenerService',
            'assetic.asset_factory' => 'getAssetic_AssetFactoryService',
            'assetic.asset_manager' => 'getAssetic_AssetManagerService',
            'assetic.filter.cssrewrite' => 'getAssetic_Filter_CssrewriteService',
            'assetic.filter_manager' => 'getAssetic_FilterManagerService',
            'assets.context' => 'getAssets_ContextService',
            'assets.packages' => 'getAssets_PackagesService',
            'cache.annotations' => 'getCache_AnnotationsService',
            'cache.app' => 'getCache_AppService',
            'cache.default_clearer' => 'getCache_DefaultClearerService',
            'cache.system' => 'getCache_SystemService',
            'cache.validator' => 'getCache_ValidatorService',
            'cache_clearer' => 'getCacheClearerService',
            'cache_warmer' => 'getCacheWarmerService',
            'config_cache_factory' => 'getConfigCacheFactoryService',
            'controller_name_converter' => 'getControllerNameConverterService',
            'debug.debug_handlers_listener' => 'getDebug_DebugHandlersListenerService',
            'debug.file_link_formatter' => 'getDebug_FileLinkFormatterService',
            'debug.stopwatch' => 'getDebug_StopwatchService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.connection_factory' => 'getDoctrine_Dbal_ConnectionFactoryService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.orm.default_entity_listener_resolver' => 'getDoctrine_Orm_DefaultEntityListenerResolverService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'doctrine.orm.default_entity_manager.property_info_extractor' => 'getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService',
            'doctrine.orm.default_listeners.attach_entity_listeners' => 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService',
            'doctrine.orm.default_manager_configurator' => 'getDoctrine_Orm_DefaultManagerConfiguratorService',
            'doctrine.orm.validator.unique' => 'getDoctrine_Orm_Validator_UniqueService',
            'doctrine.orm.validator_initializer' => 'getDoctrine_Orm_ValidatorInitializerService',
            'doctrine_cache.providers.doctrine.orm.default_metadata_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService',
            'doctrine_cache.providers.doctrine.orm.default_query_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService',
            'doctrine_cache.providers.doctrine.orm.default_result_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService',
            'event_dispatcher' => 'getEventDispatcherService',
            'file_locator' => 'getFileLocatorService',
            'filesystem' => 'getFilesystemService',
            'form.factory' => 'getForm_FactoryService',
            'form.registry' => 'getForm_RegistryService',
            'form.resolved_type_factory' => 'getForm_ResolvedTypeFactoryService',
            'form.server_params' => 'getForm_ServerParamsService',
            'form.type.birthday' => 'getForm_Type_BirthdayService',
            'form.type.button' => 'getForm_Type_ButtonService',
            'form.type.checkbox' => 'getForm_Type_CheckboxService',
            'form.type.choice' => 'getForm_Type_ChoiceService',
            'form.type.collection' => 'getForm_Type_CollectionService',
            'form.type.country' => 'getForm_Type_CountryService',
            'form.type.currency' => 'getForm_Type_CurrencyService',
            'form.type.date' => 'getForm_Type_DateService',
            'form.type.datetime' => 'getForm_Type_DatetimeService',
            'form.type.email' => 'getForm_Type_EmailService',
            'form.type.entity' => 'getForm_Type_EntityService',
            'form.type.file' => 'getForm_Type_FileService',
            'form.type.form' => 'getForm_Type_FormService',
            'form.type.hidden' => 'getForm_Type_HiddenService',
            'form.type.integer' => 'getForm_Type_IntegerService',
            'form.type.language' => 'getForm_Type_LanguageService',
            'form.type.locale' => 'getForm_Type_LocaleService',
            'form.type.money' => 'getForm_Type_MoneyService',
            'form.type.number' => 'getForm_Type_NumberService',
            'form.type.password' => 'getForm_Type_PasswordService',
            'form.type.percent' => 'getForm_Type_PercentService',
            'form.type.radio' => 'getForm_Type_RadioService',
            'form.type.range' => 'getForm_Type_RangeService',
            'form.type.repeated' => 'getForm_Type_RepeatedService',
            'form.type.reset' => 'getForm_Type_ResetService',
            'form.type.search' => 'getForm_Type_SearchService',
            'form.type.submit' => 'getForm_Type_SubmitService',
            'form.type.text' => 'getForm_Type_TextService',
            'form.type.textarea' => 'getForm_Type_TextareaService',
            'form.type.time' => 'getForm_Type_TimeService',
            'form.type.timezone' => 'getForm_Type_TimezoneService',
            'form.type.url' => 'getForm_Type_UrlService',
            'form.type_extension.csrf' => 'getForm_TypeExtension_CsrfService',
            'form.type_extension.form.http_foundation' => 'getForm_TypeExtension_Form_HttpFoundationService',
            'form.type_extension.form.validator' => 'getForm_TypeExtension_Form_ValidatorService',
            'form.type_extension.repeated.validator' => 'getForm_TypeExtension_Repeated_ValidatorService',
            'form.type_extension.submit.validator' => 'getForm_TypeExtension_Submit_ValidatorService',
            'form.type_extension.upload.validator' => 'getForm_TypeExtension_Upload_ValidatorService',
            'form.type_guesser.doctrine' => 'getForm_TypeGuesser_DoctrineService',
            'form.type_guesser.validator' => 'getForm_TypeGuesser_ValidatorService',
            'fos_user.change_password.form.factory' => 'getFosUser_ChangePassword_Form_FactoryService',
            'fos_user.change_password.form.type' => 'getFosUser_ChangePassword_Form_TypeService',
            'fos_user.listener.authentication' => 'getFosUser_Listener_AuthenticationService',
            'fos_user.listener.email_confirmation' => 'getFosUser_Listener_EmailConfirmationService',
            'fos_user.listener.flash' => 'getFosUser_Listener_FlashService',
            'fos_user.listener.resetting' => 'getFosUser_Listener_ResettingService',
            'fos_user.mailer' => 'getFosUser_MailerService',
            'fos_user.profile.form.factory' => 'getFosUser_Profile_Form_FactoryService',
            'fos_user.profile.form.type' => 'getFosUser_Profile_Form_TypeService',
            'fos_user.registration.form.factory' => 'getFosUser_Registration_Form_FactoryService',
            'fos_user.registration.form.type' => 'getFosUser_Registration_Form_TypeService',
            'fos_user.resetting.form.factory' => 'getFosUser_Resetting_Form_FactoryService',
            'fos_user.resetting.form.type' => 'getFosUser_Resetting_Form_TypeService',
            'fos_user.security.interactive_login_listener' => 'getFosUser_Security_InteractiveLoginListenerService',
            'fos_user.security.login_manager' => 'getFosUser_Security_LoginManagerService',
            'fos_user.user_manager' => 'getFosUser_UserManagerService',
            'fos_user.user_provider.username_email' => 'getFosUser_UserProvider_UsernameEmailService',
            'fos_user.username_form_type' => 'getFosUser_UsernameFormTypeService',
            'fos_user.util.canonical_fields_updater' => 'getFosUser_Util_CanonicalFieldsUpdaterService',
            'fos_user.util.email_canonicalizer' => 'getFosUser_Util_EmailCanonicalizerService',
            'fos_user.util.password_updater' => 'getFosUser_Util_PasswordUpdaterService',
            'fos_user.util.token_generator' => 'getFosUser_Util_TokenGeneratorService',
            'fos_user.util.user_manipulator' => 'getFosUser_Util_UserManipulatorService',
            'fragment.handler' => 'getFragment_HandlerService',
            'fragment.listener' => 'getFragment_ListenerService',
            'fragment.renderer.esi' => 'getFragment_Renderer_EsiService',
            'fragment.renderer.hinclude' => 'getFragment_Renderer_HincludeService',
            'fragment.renderer.inline' => 'getFragment_Renderer_InlineService',
            'fragment.renderer.ssi' => 'getFragment_Renderer_SsiService',
            'http_kernel' => 'getHttpKernelService',
            'kernel' => 'getKernelService',
            'kernel.class_cache.cache_warmer' => 'getKernel_ClassCache_CacheWarmerService',
            'knp_paginator' => 'getKnpPaginatorService',
            'knp_paginator.helper.processor' => 'getKnpPaginator_Helper_ProcessorService',
            'knp_paginator.subscriber.filtration' => 'getKnpPaginator_Subscriber_FiltrationService',
            'knp_paginator.subscriber.paginate' => 'getKnpPaginator_Subscriber_PaginateService',
            'knp_paginator.subscriber.sliding_pagination' => 'getKnpPaginator_Subscriber_SlidingPaginationService',
            'knp_paginator.subscriber.sortable' => 'getKnpPaginator_Subscriber_SortableService',
            'knp_paginator.twig.extension.pagination' => 'getKnpPaginator_Twig_Extension_PaginationService',
            'knp_snappy.image' => 'getKnpSnappy_ImageService',
            'knp_snappy.pdf' => 'getKnpSnappy_PdfService',
            'locale_listener' => 'getLocaleListenerService',
            'logger' => 'getLoggerService',
            'monolog.activation_strategy.not_found' => 'getMonolog_ActivationStrategy_NotFoundService',
            'monolog.handler.console' => 'getMonolog_Handler_ConsoleService',
            'monolog.handler.fingers_crossed.error_level_activation_strategy' => 'getMonolog_Handler_FingersCrossed_ErrorLevelActivationStrategyService',
            'monolog.handler.main' => 'getMonolog_Handler_MainService',
            'monolog.handler.nested' => 'getMonolog_Handler_NestedService',
            'monolog.handler.null_internal' => 'getMonolog_Handler_NullInternalService',
            'monolog.logger.assetic' => 'getMonolog_Logger_AsseticService',
            'monolog.logger.cache' => 'getMonolog_Logger_CacheService',
            'monolog.logger.doctrine' => 'getMonolog_Logger_DoctrineService',
            'monolog.logger.php' => 'getMonolog_Logger_PhpService',
            'monolog.logger.request' => 'getMonolog_Logger_RequestService',
            'monolog.logger.router' => 'getMonolog_Logger_RouterService',
            'monolog.logger.security' => 'getMonolog_Logger_SecurityService',
            'monolog.logger.snappy' => 'getMonolog_Logger_SnappyService',
            'monolog.logger.translation' => 'getMonolog_Logger_TranslationService',
            'monolog.processor.psr_log_message' => 'getMonolog_Processor_PsrLogMessageService',
            'oneup_uploader.chunk_manager' => 'getOneupUploader_ChunkManagerService',
            'oneup_uploader.chunks_storage' => 'getOneupUploader_ChunksStorageService',
            'oneup_uploader.controller.attestations' => 'getOneupUploader_Controller_AttestationsService',
            'oneup_uploader.controller.images' => 'getOneupUploader_Controller_ImagesService',
            'oneup_uploader.controller.sounds' => 'getOneupUploader_Controller_SoundsService',
            'oneup_uploader.error_handler.blueimp' => 'getOneupUploader_ErrorHandler_BlueimpService',
            'oneup_uploader.namer.uniqid' => 'getOneupUploader_Namer_UniqidService',
            'oneup_uploader.orphanage_manager' => 'getOneupUploader_OrphanageManagerService',
            'oneup_uploader.routing.loader' => 'getOneupUploader_Routing_LoaderService',
            'oneup_uploader.storage.attestations' => 'getOneupUploader_Storage_AttestationsService',
            'oneup_uploader.storage.images' => 'getOneupUploader_Storage_ImagesService',
            'oneup_uploader.storage.sounds' => 'getOneupUploader_Storage_SoundsService',
            'oneup_uploader.templating.uploader_helper' => 'getOneupUploader_Templating_UploaderHelperService',
            'oneup_uploader.twig.extension.uploader' => 'getOneupUploader_Twig_Extension_UploaderService',
            'oneup_uploader.validation_listener.allowed_mimetype' => 'getOneupUploader_ValidationListener_AllowedMimetypeService',
            'oneup_uploader.validation_listener.disallowed_mimetype' => 'getOneupUploader_ValidationListener_DisallowedMimetypeService',
            'oneup_uploader.validation_listener.max_size' => 'getOneupUploader_ValidationListener_MaxSizeService',
            'property_accessor' => 'getPropertyAccessorService',
            'request_stack' => 'getRequestStackService',
            'response_listener' => 'getResponseListenerService',
            'router' => 'getRouterService',
            'router.request_context' => 'getRouter_RequestContextService',
            'router_listener' => 'getRouterListenerService',
            'routing.loader' => 'getRouting_LoaderService',
            'security.access.decision_manager' => 'getSecurity_Access_DecisionManagerService',
            'security.authentication.guard_handler' => 'getSecurity_Authentication_GuardHandlerService',
            'security.authentication.manager' => 'getSecurity_Authentication_ManagerService',
            'security.authentication.session_strategy' => 'getSecurity_Authentication_SessionStrategyService',
            'security.authentication.trust_resolver' => 'getSecurity_Authentication_TrustResolverService',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService',
            'security.encoder_factory' => 'getSecurity_EncoderFactoryService',
            'security.firewall' => 'getSecurity_FirewallService',
            'security.firewall.map.context.dev' => 'getSecurity_Firewall_Map_Context_DevService',
            'security.firewall.map.context.main' => 'getSecurity_Firewall_Map_Context_MainService',
            'security.logout_url_generator' => 'getSecurity_LogoutUrlGeneratorService',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService',
            'security.rememberme.response_listener' => 'getSecurity_Rememberme_ResponseListenerService',
            'security.role_hierarchy' => 'getSecurity_RoleHierarchyService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'security.user_checker' => 'getSecurity_UserCheckerService',
            'security.validator.user_password' => 'getSecurity_Validator_UserPasswordService',
            'sensio_framework_extra.cache.listener' => 'getSensioFrameworkExtra_Cache_ListenerService',
            'sensio_framework_extra.controller.listener' => 'getSensioFrameworkExtra_Controller_ListenerService',
            'sensio_framework_extra.converter.datetime' => 'getSensioFrameworkExtra_Converter_DatetimeService',
            'sensio_framework_extra.converter.doctrine.orm' => 'getSensioFrameworkExtra_Converter_Doctrine_OrmService',
            'sensio_framework_extra.converter.listener' => 'getSensioFrameworkExtra_Converter_ListenerService',
            'sensio_framework_extra.converter.manager' => 'getSensioFrameworkExtra_Converter_ManagerService',
            'sensio_framework_extra.security.listener' => 'getSensioFrameworkExtra_Security_ListenerService',
            'sensio_framework_extra.view.guesser' => 'getSensioFrameworkExtra_View_GuesserService',
            'sensio_framework_extra.view.listener' => 'getSensioFrameworkExtra_View_ListenerService',
            'service_container' => 'getServiceContainerService',
            'session' => 'getSessionService',
            'session.handler' => 'getSession_HandlerService',
            'session.save_listener' => 'getSession_SaveListenerService',
            'session.storage.filesystem' => 'getSession_Storage_FilesystemService',
            'session.storage.metadata_bag' => 'getSession_Storage_MetadataBagService',
            'session.storage.native' => 'getSession_Storage_NativeService',
            'session.storage.php_bridge' => 'getSession_Storage_PhpBridgeService',
            'session_listener' => 'getSessionListenerService',
            'stof_doctrine_extensions.uploadable.manager' => 'getStofDoctrineExtensions_Uploadable_ManagerService',
            'streamed_response_listener' => 'getStreamedResponseListenerService',
            'swiftmailer.email_sender.listener' => 'getSwiftmailer_EmailSender_ListenerService',
            'swiftmailer.mailer.default' => 'getSwiftmailer_Mailer_DefaultService',
            'swiftmailer.mailer.default.spool' => 'getSwiftmailer_Mailer_Default_SpoolService',
            'swiftmailer.mailer.default.transport' => 'getSwiftmailer_Mailer_Default_TransportService',
            'swiftmailer.mailer.default.transport.eventdispatcher' => 'getSwiftmailer_Mailer_Default_Transport_EventdispatcherService',
            'swiftmailer.mailer.default.transport.real' => 'getSwiftmailer_Mailer_Default_Transport_RealService',
            'templating' => 'getTemplatingService',
            'templating.filename_parser' => 'getTemplating_FilenameParserService',
            'templating.helper.logout_url' => 'getTemplating_Helper_LogoutUrlService',
            'templating.helper.security' => 'getTemplating_Helper_SecurityService',
            'templating.loader' => 'getTemplating_LoaderService',
            'templating.locator' => 'getTemplating_LocatorService',
            'templating.name_parser' => 'getTemplating_NameParserService',
            'translation.dumper.csv' => 'getTranslation_Dumper_CsvService',
            'translation.dumper.ini' => 'getTranslation_Dumper_IniService',
            'translation.dumper.json' => 'getTranslation_Dumper_JsonService',
            'translation.dumper.mo' => 'getTranslation_Dumper_MoService',
            'translation.dumper.php' => 'getTranslation_Dumper_PhpService',
            'translation.dumper.po' => 'getTranslation_Dumper_PoService',
            'translation.dumper.qt' => 'getTranslation_Dumper_QtService',
            'translation.dumper.res' => 'getTranslation_Dumper_ResService',
            'translation.dumper.xliff' => 'getTranslation_Dumper_XliffService',
            'translation.dumper.yml' => 'getTranslation_Dumper_YmlService',
            'translation.extractor' => 'getTranslation_ExtractorService',
            'translation.extractor.php' => 'getTranslation_Extractor_PhpService',
            'translation.loader' => 'getTranslation_LoaderService',
            'translation.loader.csv' => 'getTranslation_Loader_CsvService',
            'translation.loader.dat' => 'getTranslation_Loader_DatService',
            'translation.loader.ini' => 'getTranslation_Loader_IniService',
            'translation.loader.json' => 'getTranslation_Loader_JsonService',
            'translation.loader.mo' => 'getTranslation_Loader_MoService',
            'translation.loader.php' => 'getTranslation_Loader_PhpService',
            'translation.loader.po' => 'getTranslation_Loader_PoService',
            'translation.loader.qt' => 'getTranslation_Loader_QtService',
            'translation.loader.res' => 'getTranslation_Loader_ResService',
            'translation.loader.xliff' => 'getTranslation_Loader_XliffService',
            'translation.loader.yml' => 'getTranslation_Loader_YmlService',
            'translation.writer' => 'getTranslation_WriterService',
            'translator.default' => 'getTranslator_DefaultService',
            'translator_listener' => 'getTranslatorListenerService',
            'twig' => 'getTwigService',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService',
            'twig.exception_listener' => 'getTwig_ExceptionListenerService',
            'twig.extension.intl' => 'getTwig_Extension_IntlService',
            'twig.form.renderer' => 'getTwig_Form_RendererService',
            'twig.loader' => 'getTwig_LoaderService',
            'twig.profile' => 'getTwig_ProfileService',
            'twig.runtime.httpkernel' => 'getTwig_Runtime_HttpkernelService',
            'twig.translation.extractor' => 'getTwig_Translation_ExtractorService',
            'uri_signer' => 'getUriSignerService',
            'validate_request_listener' => 'getValidateRequestListenerService',
            'validator' => 'getValidatorService',
            'validator.builder' => 'getValidator_BuilderService',
            'validator.email' => 'getValidator_EmailService',
            'validator.expression' => 'getValidator_ExpressionService',
        );
        $this->aliases = array(
            'cache.app_clearer' => 'cache.default_clearer',
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.default_metadata_cache' => 'doctrine_cache.providers.doctrine.orm.default_metadata_cache',
            'doctrine.orm.default_query_cache' => 'doctrine_cache.providers.doctrine.orm.default_query_cache',
            'doctrine.orm.default_result_cache' => 'doctrine_cache.providers.doctrine.orm.default_result_cache',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'fos_user.util.username_canonicalizer' => 'fos_user.util.email_canonicalizer',
            'mailer' => 'swiftmailer.mailer.default',
            'session.storage' => 'session.storage.native',
            'swiftmailer.mailer' => 'swiftmailer.mailer.default',
            'swiftmailer.spool' => 'swiftmailer.mailer.default.spool',
            'swiftmailer.transport' => 'swiftmailer.mailer.default.transport',
            'swiftmailer.transport.real' => 'swiftmailer.mailer.default.transport.real',
            'translator' => 'translator.default',
        );
    }

    /*
     * {@inheritdoc}
     */
    public function compile()
    {
        throw new LogicException('You cannot compile a dumped frozen container.');
    }

    /*
     * {@inheritdoc}
     */
    public function isFrozen()
    {
        return true;
    }

    /*
     * Gets the 'annotation_reader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Annotations\CachedReader A Doctrine\Common\Annotations\CachedReader instance
     */
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\CachedReader(${($_ = isset($this->services['annotations.reader']) ? $this->services['annotations.reader'] : $this->getAnnotations_ReaderService()) && false ?: '_'}, new \Symfony\Component\Cache\DoctrineProvider(\Symfony\Component\Cache\Adapter\PhpArrayAdapter::create((__DIR__.'/annotations.php'), ${($_ = isset($this->services['cache.annotations']) ? $this->services['cache.annotations'] : $this->getCache_AnnotationsService()) && false ?: '_'})), false);
    }

    /*
     * Gets the 'app.apprenant.code' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \UserBundle\Services\Code A UserBundle\Services\Code instance
     */
    protected function getApp_Apprenant_CodeService()
    {
        return $this->services['app.apprenant.code'] = new \UserBundle\Services\Code($this->get('doctrine.orm.default_entity_manager'));
    }

    /*
     * Gets the 'app.form.qcm_exam' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \AppBundle\Form\Type\QCMExamType A AppBundle\Form\Type\QCMExamType instance
     */
    protected function getApp_Form_QcmExamService()
    {
        return $this->services['app.form.qcm_exam'] = new \AppBundle\Form\Type\QCMExamType($this->get("doctrine.orm.default_entity_manager")->getRepository("AppBundle:QCM"));
    }

    /*
     * Gets the 'app.form.type.choices_images' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \AppBundle\Form\Type\ResponseChoicesType A AppBundle\Form\Type\ResponseChoicesType instance
     */
    protected function getApp_Form_Type_ChoicesImagesService()
    {
        return $this->services['app.form.type.choices_images'] = new \AppBundle\Form\Type\ResponseChoicesType();
    }

    /*
     * Gets the 'app.services.qcm' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \AppBundle\Services\QCM A AppBundle\Services\QCM instance
     */
    protected function getApp_Services_QcmService()
    {
        return $this->services['app.services.qcm'] = new \AppBundle\Services\QCM($this->get("doctrine.orm.default_entity_manager")->getRepository("AppBundle:QCM"), $this->get("doctrine.orm.default_entity_manager")->getRepository("AppBundle:Question"));
    }

    /*
     * Gets the 'app.twig.extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \AppBundle\Twig\AppTwigExtension A AppBundle\Twig\AppTwigExtension instance
     */
    protected function getApp_Twig_ExtensionService()
    {
        return $this->services['app.twig.extension'] = new \AppBundle\Twig\AppTwigExtension($this->get("doctrine.orm.default_entity_manager"), $this->get("security.token_storage")->getToken());
    }

    /*
     * Gets the 'app.upload_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \AppBundle\EventListener\UploadListener A AppBundle\EventListener\UploadListener instance
     */
    protected function getApp_UploadListenerService()
    {
        return $this->services['app.upload_listener'] = new \AppBundle\EventListener\UploadListener($this->get('doctrine.orm.default_entity_manager'));
    }

    /*
     * Gets the 'assetic.asset_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Assetic\Factory\LazyAssetManager A Assetic\Factory\LazyAssetManager instance
     */
    protected function getAssetic_AssetManagerService()
    {
        $a = $this->get('templating.loader');

        $this->services['assetic.asset_manager'] = $instance = new \Assetic\Factory\LazyAssetManager(${($_ = isset($this->services['assetic.asset_factory']) ? $this->services['assetic.asset_factory'] : $this->getAssetic_AssetFactoryService()) && false ?: '_'}, array('twig' => new \Assetic\Factory\Loader\CachedFormulaLoader(new \Assetic\Extension\Twig\TwigFormulaLoader($this->get('twig'), $this->get('monolog.logger.assetic', ContainerInterface::NULL_ON_INVALID_REFERENCE)), new \Assetic\Cache\ConfigCache((__DIR__.'/assetic/config')), false)));

        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'AppBundle', '/app/app/Resources/AppBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'AppBundle', '/app/src/AppBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'UserBundle', '/app/app/Resources/UserBundle/views', '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'UserBundle', '/app/src/UserBundle/Resources/views', '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, '', '/app/app/Resources/views', '/\\.[^.]+\\.twig$/'), 'twig');

        return $instance;
    }

    /*
     * Gets the 'assetic.filter.cssrewrite' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Assetic\Filter\CssRewriteFilter A Assetic\Filter\CssRewriteFilter instance
     */
    protected function getAssetic_Filter_CssrewriteService()
    {
        return $this->services['assetic.filter.cssrewrite'] = new \Assetic\Filter\CssRewriteFilter();
    }

    /*
     * Gets the 'assetic.filter_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\AsseticBundle\FilterManager A Symfony\Bundle\AsseticBundle\FilterManager instance
     */
    protected function getAssetic_FilterManagerService()
    {
        return $this->services['assetic.filter_manager'] = new \Symfony\Bundle\AsseticBundle\FilterManager($this, array('cssrewrite' => 'assetic.filter.cssrewrite'));
    }

    /*
     * Gets the 'assets.context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Asset\Context\RequestStackContext A Symfony\Component\Asset\Context\RequestStackContext instance
     */
    protected function getAssets_ContextService()
    {
        return $this->services['assets.context'] = new \Symfony\Component\Asset\Context\RequestStackContext($this->get('request_stack'));
    }

    /*
     * Gets the 'assets.packages' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Asset\Packages A Symfony\Component\Asset\Packages instance
     */
    protected function getAssets_PackagesService()
    {
        return $this->services['assets.packages'] = new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', new \Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy(), $this->get('assets.context')), array());
    }

    /*
     * Gets the 'cache.app' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter A Symfony\Component\Cache\Adapter\FilesystemAdapter instance
     */
    protected function getCache_AppService()
    {
        $this->services['cache.app'] = $instance = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('NX96lSAFZJ', 0, (__DIR__.'/pools'));

        if ($this->has('monolog.logger.cache')) {
            $instance->setLogger($this->get('monolog.logger.cache', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }

        return $instance;
    }

    /*
     * Gets the 'cache.default_clearer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer A Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer instance
     */
    protected function getCache_DefaultClearerService()
    {
        $this->services['cache.default_clearer'] = $instance = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer();

        $instance->addPool($this->get('cache.app'));
        $instance->addPool($this->get('cache.system'));
        $instance->addPool(${($_ = isset($this->services['cache.validator']) ? $this->services['cache.validator'] : $this->getCache_ValidatorService()) && false ?: '_'});
        $instance->addPool(${($_ = isset($this->services['cache.annotations']) ? $this->services['cache.annotations'] : $this->getCache_AnnotationsService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the 'cache.system' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface A Symfony\Component\Cache\Adapter\AdapterInterface instance
     */
    protected function getCache_SystemService()
    {
        return $this->services['cache.system'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('NRf5BkwPhY', 0, 'Z67oXFu5fRVwan9fAj7HxN', (__DIR__.'/pools'), $this->get('monolog.logger.cache', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /*
     * Gets the 'cache_clearer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer A Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer instance
     */
    protected function getCacheClearerService()
    {
        return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(array(0 => $this->get('cache.default_clearer')));
    }

    /*
     * Gets the 'cache_warmer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate A Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate instance
     */
    protected function getCacheWarmerService()
    {
        $a = $this->get('kernel');
        $b = $this->get('templating.filename_parser');

        $c = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplateFinder($a, $b, '/app/app/Resources');

        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(array(0 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplatePathsCacheWarmer($c, ${($_ = isset($this->services['templating.locator']) ? $this->services['templating.locator'] : $this->getTemplating_LocatorService()) && false ?: '_'}), 1 => new \Symfony\Bundle\AsseticBundle\CacheWarmer\AssetManagerCacheWarmer($this), 2 => $this->get('kernel.class_cache.cache_warmer'), 3 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TranslationsCacheWarmer($this->get('translator.default')), 4 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\ValidatorCacheWarmer($this->get('validator.builder'), (__DIR__.'/validation.php'), ${($_ = isset($this->services['cache.validator']) ? $this->services['cache.validator'] : $this->getCache_ValidatorService()) && false ?: '_'}), 5 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer($this->get('router')), 6 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\AnnotationsCacheWarmer(${($_ = isset($this->services['annotations.reader']) ? $this->services['annotations.reader'] : $this->getAnnotations_ReaderService()) && false ?: '_'}, (__DIR__.'/annotations.php'), ${($_ = isset($this->services['cache.annotations']) ? $this->services['cache.annotations'] : $this->getCache_AnnotationsService()) && false ?: '_'}), 7 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheCacheWarmer($this, $c, array()), 8 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer($this->get('twig'), new \Symfony\Bundle\TwigBundle\TemplateIterator($a, '/app/app', array())), 9 => new \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer($this->get('doctrine'))));
    }

    /*
     * Gets the 'config_cache_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Config\ResourceCheckerConfigCacheFactory A Symfony\Component\Config\ResourceCheckerConfigCacheFactory instance
     */
    protected function getConfigCacheFactoryService()
    {
        return $this->services['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory(array());
    }

    /*
     * Gets the 'debug.debug_handlers_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener A Symfony\Component\HttpKernel\EventListener\DebugHandlersListener instance
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        return $this->services['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, $this->get('monolog.logger.php', ContainerInterface::NULL_ON_INVALID_REFERENCE), -1, 0, false, ${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : $this->getDebug_FileLinkFormatterService()) && false ?: '_'}, false);
    }

    /*
     * Gets the 'debug.stopwatch' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Stopwatch\Stopwatch A Symfony\Component\Stopwatch\Stopwatch instance
     */
    protected function getDebug_StopwatchService()
    {
        return $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch();
    }

    /*
     * Gets the 'doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry A Doctrine\Bundle\DoctrineBundle\Registry instance
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, array('default' => 'doctrine.dbal.default_connection'), array('default' => 'doctrine.orm.default_entity_manager'), 'default', 'default');
    }

    /*
     * Gets the 'doctrine.dbal.connection_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ConnectionFactory A Doctrine\Bundle\DoctrineBundle\ConnectionFactory instance
     */
    protected function getDoctrine_Dbal_ConnectionFactoryService()
    {
        return $this->services['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory(array());
    }

    /*
     * Gets the 'doctrine.dbal.default_connection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\DBAL\Connection A Doctrine\DBAL\Connection instance
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = $this->get('annotation_reader');

        $b = new \Gedmo\Timestampable\TimestampableListener();
        $b->setAnnotationReader($a);

        $c = new \Gedmo\Sluggable\SluggableListener();
        $c->setAnnotationReader($a);

        $d = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this);
        $d->addEventSubscriber(new \FOS\UserBundle\Doctrine\UserListener(${($_ = isset($this->services['fos_user.util.password_updater']) ? $this->services['fos_user.util.password_updater'] : $this->getFosUser_Util_PasswordUpdaterService()) && false ?: '_'}, ${($_ = isset($this->services['fos_user.util.canonical_fields_updater']) ? $this->services['fos_user.util.canonical_fields_updater'] : $this->getFosUser_Util_CanonicalFieldsUpdaterService()) && false ?: '_'}));
        $d->addEventSubscriber($b);
        $d->addEventSubscriber($c);
        $d->addEventListener(array(0 => 'loadClassMetadata'), $this->get('doctrine.orm.default_listeners.attach_entity_listeners'));

        return $this->services['doctrine.dbal.default_connection'] = $this->get('doctrine.dbal.connection_factory')->createConnection(array('driver' => 'pdo_mysql', 'host' => 'dev_db_btp', 'port' => NULL, 'dbname' => 'egfbtp_prod', 'user' => 'root', 'password' => 'root', 'charset' => 'UTF8', 'driverOptions' => array(), 'defaultTableOptions' => array()), new \Doctrine\DBAL\Configuration(), $d, array());
    }

    /*
     * Gets the 'doctrine.orm.default_entity_listener_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver A Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver instance
     */
    protected function getDoctrine_Orm_DefaultEntityListenerResolverService()
    {
        return $this->services['doctrine.orm.default_entity_listener_resolver'] = new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver($this);
    }

    /*
     * Gets the 'doctrine.orm.default_entity_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Doctrine\ORM\EntityManager A Doctrine\ORM\EntityManager instance
     */
    protected function getDoctrine_Orm_DefaultEntityManagerService($lazyLoad = true)
    {
        $a = $this->get('annotation_reader');

        $b = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($a, array(0 => '/app/src/AppBundle/Entity', 1 => '/app/src/UserBundle/Entity'));

        $c = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();
        $c->addDriver($b, 'AppBundle\\Entity');
        $c->addDriver($b, 'UserBundle\\Entity');
        $c->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array('/app/vendor/friendsofsymfony/user-bundle/Resources/config/doctrine-mapping' => 'FOS\\UserBundle\\Model'), '.orm.xml')), 'FOS\\UserBundle\\Model');

        $d = new \Doctrine\ORM\Configuration();
        $d->setEntityNamespaces(array('AppBundle' => 'AppBundle\\Entity', 'UserBundle' => 'UserBundle\\Entity'));
        $d->setMetadataCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.default_metadata_cache'));
        $d->setQueryCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.default_query_cache'));
        $d->setResultCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.default_result_cache'));
        $d->setMetadataDriverImpl($c);
        $d->setProxyDir((__DIR__.'/doctrine/orm/Proxies'));
        $d->setProxyNamespace('Proxies');
        $d->setAutoGenerateProxyClasses(false);
        $d->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $d->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $d->setNamingStrategy(new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy());
        $d->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
        $d->setEntityListenerResolver($this->get('doctrine.orm.default_entity_listener_resolver'));
        $d->addCustomDatetimeFunction('day', 'AppBundle\\DQL\\Day');
        $d->addCustomDatetimeFunction('month', 'AppBundle\\DQL\\Month');
        $d->addCustomDatetimeFunction('year', 'AppBundle\\DQL\\Year');

        $this->services['doctrine.orm.default_entity_manager'] = $instance = \Doctrine\ORM\EntityManager::create($this->get('doctrine.dbal.default_connection'), $d);

        $this->get('doctrine.orm.default_manager_configurator')->configure($instance);

        return $instance;
    }

    /*
     * Gets the 'doctrine.orm.default_entity_manager.property_info_extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor A Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor instance
     */
    protected function getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService()
    {
        return $this->services['doctrine.orm.default_entity_manager.property_info_extractor'] = new \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor($this->get('doctrine.orm.default_entity_manager')->getMetadataFactory());
    }

    /*
     * Gets the 'doctrine.orm.default_listeners.attach_entity_listeners' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\ORM\Tools\AttachEntityListenersListener A Doctrine\ORM\Tools\AttachEntityListenersListener instance
     */
    protected function getDoctrine_Orm_DefaultListeners_AttachEntityListenersService()
    {
        return $this->services['doctrine.orm.default_listeners.attach_entity_listeners'] = new \Doctrine\ORM\Tools\AttachEntityListenersListener();
    }

    /*
     * Gets the 'doctrine.orm.default_manager_configurator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator A Doctrine\Bundle\DoctrineBundle\ManagerConfigurator instance
     */
    protected function getDoctrine_Orm_DefaultManagerConfiguratorService()
    {
        return $this->services['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator(array(), array());
    }

    /*
     * Gets the 'doctrine.orm.validator.unique' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator A Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator instance
     */
    protected function getDoctrine_Orm_Validator_UniqueService()
    {
        return $this->services['doctrine.orm.validator.unique'] = new \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator($this->get('doctrine'));
    }

    /*
     * Gets the 'doctrine.orm.validator_initializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer A Symfony\Bridge\Doctrine\Validator\DoctrineInitializer instance
     */
    protected function getDoctrine_Orm_ValidatorInitializerService()
    {
        return $this->services['doctrine.orm.validator_initializer'] = new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer($this->get('doctrine'));
    }

    /*
     * Gets the 'doctrine_cache.providers.doctrine.orm.default_metadata_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache A Doctrine\Common\Cache\ArrayCache instance
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_default_81d21123c1b0314fab079b892dffda1542e5ccdc985957a2fc0cc715be4dbc1e');

        return $instance;
    }

    /*
     * Gets the 'doctrine_cache.providers.doctrine.orm.default_query_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache A Doctrine\Common\Cache\ArrayCache instance
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_query_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_default_81d21123c1b0314fab079b892dffda1542e5ccdc985957a2fc0cc715be4dbc1e');

        return $instance;
    }

    /*
     * Gets the 'doctrine_cache.providers.doctrine.orm.default_result_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache A Doctrine\Common\Cache\ArrayCache instance
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_result_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_default_81d21123c1b0314fab079b892dffda1542e5ccdc985957a2fc0cc715be4dbc1e');

        return $instance;
    }

    /*
     * Gets the 'event_dispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher A Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher instance
     */
    protected function getEventDispatcherService()
    {
        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this);

        $instance->addListenerService('kernel.request', array(0 => 'knp_paginator.subscriber.sliding_pagination', 1 => 'onKernelRequest'), 0);
        $instance->addListenerService('oneup_uploader.validation', array(0 => 'oneup_uploader.validation_listener.max_size', 1 => 'onValidate'), 0);
        $instance->addListenerService('oneup_uploader.validation', array(0 => 'oneup_uploader.validation_listener.allowed_mimetype', 1 => 'onValidate'), 0);
        $instance->addListenerService('oneup_uploader.validation', array(0 => 'oneup_uploader.validation_listener.disallowed_mimetype', 1 => 'onValidate'), 0);
        $instance->addListenerService('oneup_uploader.post_persist', array(0 => 'app.upload_listener', 1 => 'onUpload'), 0);
        $instance->addSubscriberService('response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener');
        $instance->addSubscriberService('streamed_response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener');
        $instance->addSubscriberService('locale_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener');
        $instance->addSubscriberService('validate_request_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ValidateRequestListener');
        $instance->addSubscriberService('translator_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\TranslatorListener');
        $instance->addSubscriberService('session_listener', 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener');
        $instance->addSubscriberService('session.save_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\SaveSessionListener');
        $instance->addSubscriberService('fragment.listener', 'Symfony\\Component\\HttpKernel\\EventListener\\FragmentListener');
        $instance->addSubscriberService('debug.debug_handlers_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\DebugHandlersListener');
        $instance->addSubscriberService('router_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener');
        $instance->addSubscriberService('security.firewall', 'Symfony\\Component\\Security\\Http\\Firewall');
        $instance->addSubscriberService('security.rememberme.response_listener', 'Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener');
        $instance->addSubscriberService('twig.exception_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener');
        $instance->addSubscriberService('monolog.handler.console', 'Symfony\\Bridge\\Monolog\\Handler\\ConsoleHandler');
        $instance->addSubscriberService('swiftmailer.email_sender.listener', 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener');
        $instance->addSubscriberService('sensio_framework_extra.controller.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener');
        $instance->addSubscriberService('sensio_framework_extra.converter.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener');
        $instance->addSubscriberService('sensio_framework_extra.view.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener');
        $instance->addSubscriberService('sensio_framework_extra.cache.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\HttpCacheListener');
        $instance->addSubscriberService('sensio_framework_extra.security.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\SecurityListener');
        $instance->addSubscriberService('fos_user.security.interactive_login_listener', 'FOS\\UserBundle\\EventListener\\LastLoginListener');
        $instance->addSubscriberService('fos_user.listener.authentication', 'FOS\\UserBundle\\EventListener\\AuthenticationListener');
        $instance->addSubscriberService('fos_user.listener.flash', 'FOS\\UserBundle\\EventListener\\FlashListener');
        $instance->addSubscriberService('fos_user.listener.email_confirmation', 'FOS\\UserBundle\\EventListener\\EmailConfirmationListener');
        $instance->addSubscriberService('fos_user.listener.resetting', 'FOS\\UserBundle\\EventListener\\ResettingListener');
        $instance->addListenerService('knp_pager.before', array(0 => 'knp_paginator.subscriber.paginate', 1 => 'before'), 0);
        $instance->addListenerService('knp_pager.pagination', array(0 => 'knp_paginator.subscriber.paginate', 1 => 'pagination'), 0);
        $instance->addListenerService('knp_pager.before', array(0 => 'knp_paginator.subscriber.sortable', 1 => 'before'), 1);
        $instance->addListenerService('knp_pager.before', array(0 => 'knp_paginator.subscriber.filtration', 1 => 'before'), 1);
        $instance->addListenerService('knp_pager.pagination', array(0 => 'knp_paginator.subscriber.sliding_pagination', 1 => 'pagination'), 1);

        return $instance;
    }

    /*
     * Gets the 'file_locator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Config\FileLocator A Symfony\Component\HttpKernel\Config\FileLocator instance
     */
    protected function getFileLocatorService()
    {
        return $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator($this->get('kernel'), '/app/app/Resources');
    }

    /*
     * Gets the 'filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Filesystem\Filesystem A Symfony\Component\Filesystem\Filesystem instance
     */
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }

    /*
     * Gets the 'form.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\FormFactory A Symfony\Component\Form\FormFactory instance
     */
    protected function getForm_FactoryService()
    {
        return $this->services['form.factory'] = new \Symfony\Component\Form\FormFactory($this->get('form.registry'), $this->get('form.resolved_type_factory'));
    }

    /*
     * Gets the 'form.registry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\FormRegistry A Symfony\Component\Form\FormRegistry instance
     */
    protected function getForm_RegistryService()
    {
        return $this->services['form.registry'] = new \Symfony\Component\Form\FormRegistry(array(0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension($this, array('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => 'form.type.form', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => 'form.type.choice', 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => 'form.type.entity', 'FOS\\UserBundle\\Form\\Type\\UsernameFormType' => 'fos_user.username_form_type', 'FOS\\UserBundle\\Form\\Type\\ProfileFormType' => 'fos_user.profile.form.type', 'FOS\\UserBundle\\Form\\Type\\RegistrationFormType' => 'fos_user.registration.form.type', 'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType' => 'fos_user.change_password.form.type', 'FOS\\UserBundle\\Form\\Type\\ResettingFormType' => 'fos_user.resetting.form.type', 'AppBundle\\Form\\Type\\QCMExamType' => 'app.form.qcm_exam', 'AppBundle\\Form\\Type\\ResponseChoicesType' => 'app.form.type.choices_images'), array('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => array(0 => 'form.type_extension.form.http_foundation', 1 => 'form.type_extension.form.validator', 2 => 'form.type_extension.upload.validator', 3 => 'form.type_extension.csrf'), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => array(0 => 'form.type_extension.repeated.validator'), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => array(0 => 'form.type_extension.submit.validator')), array(0 => 'form.type_guesser.validator', 1 => 'form.type_guesser.doctrine'))), $this->get('form.resolved_type_factory'));
    }

    /*
     * Gets the 'form.resolved_type_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\ResolvedFormTypeFactory A Symfony\Component\Form\ResolvedFormTypeFactory instance
     */
    protected function getForm_ResolvedTypeFactoryService()
    {
        return $this->services['form.resolved_type_factory'] = new \Symfony\Component\Form\ResolvedFormTypeFactory();
    }

    /*
     * Gets the 'form.type.birthday' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\BirthdayType A Symfony\Component\Form\Extension\Core\Type\BirthdayType instance
     *
     * @deprecated The "form.type.birthday" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_BirthdayService()
    {
        @trigger_error('The "form.type.birthday" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.birthday'] = new \Symfony\Component\Form\Extension\Core\Type\BirthdayType();
    }

    /*
     * Gets the 'form.type.button' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ButtonType A Symfony\Component\Form\Extension\Core\Type\ButtonType instance
     *
     * @deprecated The "form.type.button" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_ButtonService()
    {
        @trigger_error('The "form.type.button" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.button'] = new \Symfony\Component\Form\Extension\Core\Type\ButtonType();
    }

    /*
     * Gets the 'form.type.checkbox' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CheckboxType A Symfony\Component\Form\Extension\Core\Type\CheckboxType instance
     *
     * @deprecated The "form.type.checkbox" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_CheckboxService()
    {
        @trigger_error('The "form.type.checkbox" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.checkbox'] = new \Symfony\Component\Form\Extension\Core\Type\CheckboxType();
    }

    /*
     * Gets the 'form.type.choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ChoiceType A Symfony\Component\Form\Extension\Core\Type\ChoiceType instance
     */
    protected function getForm_Type_ChoiceService()
    {
        return $this->services['form.type.choice'] = new \Symfony\Component\Form\Extension\Core\Type\ChoiceType(new \Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator(new \Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator(new \Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory(), $this->get('property_accessor'))));
    }

    /*
     * Gets the 'form.type.collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CollectionType A Symfony\Component\Form\Extension\Core\Type\CollectionType instance
     *
     * @deprecated The "form.type.collection" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_CollectionService()
    {
        @trigger_error('The "form.type.collection" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.collection'] = new \Symfony\Component\Form\Extension\Core\Type\CollectionType();
    }

    /*
     * Gets the 'form.type.country' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CountryType A Symfony\Component\Form\Extension\Core\Type\CountryType instance
     *
     * @deprecated The "form.type.country" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_CountryService()
    {
        @trigger_error('The "form.type.country" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.country'] = new \Symfony\Component\Form\Extension\Core\Type\CountryType();
    }

    /*
     * Gets the 'form.type.currency' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CurrencyType A Symfony\Component\Form\Extension\Core\Type\CurrencyType instance
     *
     * @deprecated The "form.type.currency" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_CurrencyService()
    {
        @trigger_error('The "form.type.currency" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.currency'] = new \Symfony\Component\Form\Extension\Core\Type\CurrencyType();
    }

    /*
     * Gets the 'form.type.date' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\DateType A Symfony\Component\Form\Extension\Core\Type\DateType instance
     *
     * @deprecated The "form.type.date" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_DateService()
    {
        @trigger_error('The "form.type.date" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.date'] = new \Symfony\Component\Form\Extension\Core\Type\DateType();
    }

    /*
     * Gets the 'form.type.datetime' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\DateTimeType A Symfony\Component\Form\Extension\Core\Type\DateTimeType instance
     *
     * @deprecated The "form.type.datetime" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_DatetimeService()
    {
        @trigger_error('The "form.type.datetime" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.datetime'] = new \Symfony\Component\Form\Extension\Core\Type\DateTimeType();
    }

    /*
     * Gets the 'form.type.email' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\EmailType A Symfony\Component\Form\Extension\Core\Type\EmailType instance
     *
     * @deprecated The "form.type.email" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_EmailService()
    {
        @trigger_error('The "form.type.email" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.email'] = new \Symfony\Component\Form\Extension\Core\Type\EmailType();
    }

    /*
     * Gets the 'form.type.entity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\Type\EntityType A Symfony\Bridge\Doctrine\Form\Type\EntityType instance
     */
    protected function getForm_Type_EntityService()
    {
        return $this->services['form.type.entity'] = new \Symfony\Bridge\Doctrine\Form\Type\EntityType($this->get('doctrine'));
    }

    /*
     * Gets the 'form.type.file' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FileType A Symfony\Component\Form\Extension\Core\Type\FileType instance
     *
     * @deprecated The "form.type.file" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_FileService()
    {
        @trigger_error('The "form.type.file" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.file'] = new \Symfony\Component\Form\Extension\Core\Type\FileType();
    }

    /*
     * Gets the 'form.type.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FormType A Symfony\Component\Form\Extension\Core\Type\FormType instance
     */
    protected function getForm_Type_FormService()
    {
        return $this->services['form.type.form'] = new \Symfony\Component\Form\Extension\Core\Type\FormType($this->get('property_accessor'));
    }

    /*
     * Gets the 'form.type.hidden' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\HiddenType A Symfony\Component\Form\Extension\Core\Type\HiddenType instance
     *
     * @deprecated The "form.type.hidden" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_HiddenService()
    {
        @trigger_error('The "form.type.hidden" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.hidden'] = new \Symfony\Component\Form\Extension\Core\Type\HiddenType();
    }

    /*
     * Gets the 'form.type.integer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\IntegerType A Symfony\Component\Form\Extension\Core\Type\IntegerType instance
     *
     * @deprecated The "form.type.integer" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_IntegerService()
    {
        @trigger_error('The "form.type.integer" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.integer'] = new \Symfony\Component\Form\Extension\Core\Type\IntegerType();
    }

    /*
     * Gets the 'form.type.language' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\LanguageType A Symfony\Component\Form\Extension\Core\Type\LanguageType instance
     *
     * @deprecated The "form.type.language" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_LanguageService()
    {
        @trigger_error('The "form.type.language" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.language'] = new \Symfony\Component\Form\Extension\Core\Type\LanguageType();
    }

    /*
     * Gets the 'form.type.locale' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\LocaleType A Symfony\Component\Form\Extension\Core\Type\LocaleType instance
     *
     * @deprecated The "form.type.locale" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_LocaleService()
    {
        @trigger_error('The "form.type.locale" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.locale'] = new \Symfony\Component\Form\Extension\Core\Type\LocaleType();
    }

    /*
     * Gets the 'form.type.money' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\MoneyType A Symfony\Component\Form\Extension\Core\Type\MoneyType instance
     *
     * @deprecated The "form.type.money" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_MoneyService()
    {
        @trigger_error('The "form.type.money" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.money'] = new \Symfony\Component\Form\Extension\Core\Type\MoneyType();
    }

    /*
     * Gets the 'form.type.number' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\NumberType A Symfony\Component\Form\Extension\Core\Type\NumberType instance
     *
     * @deprecated The "form.type.number" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_NumberService()
    {
        @trigger_error('The "form.type.number" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.number'] = new \Symfony\Component\Form\Extension\Core\Type\NumberType();
    }

    /*
     * Gets the 'form.type.password' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\PasswordType A Symfony\Component\Form\Extension\Core\Type\PasswordType instance
     *
     * @deprecated The "form.type.password" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_PasswordService()
    {
        @trigger_error('The "form.type.password" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.password'] = new \Symfony\Component\Form\Extension\Core\Type\PasswordType();
    }

    /*
     * Gets the 'form.type.percent' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\PercentType A Symfony\Component\Form\Extension\Core\Type\PercentType instance
     *
     * @deprecated The "form.type.percent" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_PercentService()
    {
        @trigger_error('The "form.type.percent" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.percent'] = new \Symfony\Component\Form\Extension\Core\Type\PercentType();
    }

    /*
     * Gets the 'form.type.radio' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RadioType A Symfony\Component\Form\Extension\Core\Type\RadioType instance
     *
     * @deprecated The "form.type.radio" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_RadioService()
    {
        @trigger_error('The "form.type.radio" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.radio'] = new \Symfony\Component\Form\Extension\Core\Type\RadioType();
    }

    /*
     * Gets the 'form.type.range' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RangeType A Symfony\Component\Form\Extension\Core\Type\RangeType instance
     *
     * @deprecated The "form.type.range" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_RangeService()
    {
        @trigger_error('The "form.type.range" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.range'] = new \Symfony\Component\Form\Extension\Core\Type\RangeType();
    }

    /*
     * Gets the 'form.type.repeated' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RepeatedType A Symfony\Component\Form\Extension\Core\Type\RepeatedType instance
     *
     * @deprecated The "form.type.repeated" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_RepeatedService()
    {
        @trigger_error('The "form.type.repeated" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.repeated'] = new \Symfony\Component\Form\Extension\Core\Type\RepeatedType();
    }

    /*
     * Gets the 'form.type.reset' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ResetType A Symfony\Component\Form\Extension\Core\Type\ResetType instance
     *
     * @deprecated The "form.type.reset" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_ResetService()
    {
        @trigger_error('The "form.type.reset" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.reset'] = new \Symfony\Component\Form\Extension\Core\Type\ResetType();
    }

    /*
     * Gets the 'form.type.search' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\SearchType A Symfony\Component\Form\Extension\Core\Type\SearchType instance
     *
     * @deprecated The "form.type.search" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_SearchService()
    {
        @trigger_error('The "form.type.search" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.search'] = new \Symfony\Component\Form\Extension\Core\Type\SearchType();
    }

    /*
     * Gets the 'form.type.submit' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\SubmitType A Symfony\Component\Form\Extension\Core\Type\SubmitType instance
     *
     * @deprecated The "form.type.submit" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_SubmitService()
    {
        @trigger_error('The "form.type.submit" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.submit'] = new \Symfony\Component\Form\Extension\Core\Type\SubmitType();
    }

    /*
     * Gets the 'form.type.text' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TextType A Symfony\Component\Form\Extension\Core\Type\TextType instance
     *
     * @deprecated The "form.type.text" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_TextService()
    {
        @trigger_error('The "form.type.text" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.text'] = new \Symfony\Component\Form\Extension\Core\Type\TextType();
    }

    /*
     * Gets the 'form.type.textarea' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TextareaType A Symfony\Component\Form\Extension\Core\Type\TextareaType instance
     *
     * @deprecated The "form.type.textarea" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_TextareaService()
    {
        @trigger_error('The "form.type.textarea" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.textarea'] = new \Symfony\Component\Form\Extension\Core\Type\TextareaType();
    }

    /*
     * Gets the 'form.type.time' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TimeType A Symfony\Component\Form\Extension\Core\Type\TimeType instance
     *
     * @deprecated The "form.type.time" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_TimeService()
    {
        @trigger_error('The "form.type.time" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.time'] = new \Symfony\Component\Form\Extension\Core\Type\TimeType();
    }

    /*
     * Gets the 'form.type.timezone' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TimezoneType A Symfony\Component\Form\Extension\Core\Type\TimezoneType instance
     *
     * @deprecated The "form.type.timezone" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_TimezoneService()
    {
        @trigger_error('The "form.type.timezone" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.timezone'] = new \Symfony\Component\Form\Extension\Core\Type\TimezoneType();
    }

    /*
     * Gets the 'form.type.url' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\UrlType A Symfony\Component\Form\Extension\Core\Type\UrlType instance
     *
     * @deprecated The "form.type.url" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_UrlService()
    {
        @trigger_error('The "form.type.url" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.url'] = new \Symfony\Component\Form\Extension\Core\Type\UrlType();
    }

    /*
     * Gets the 'form.type_extension.csrf' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension A Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension instance
     */
    protected function getForm_TypeExtension_CsrfService()
    {
        return $this->services['form.type_extension.csrf'] = new \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension($this->get('security.csrf.token_manager'), true, '_token', $this->get('translator.default'), 'validators', ${($_ = isset($this->services['form.server_params']) ? $this->services['form.server_params'] : $this->getForm_ServerParamsService()) && false ?: '_'});
    }

    /*
     * Gets the 'form.type_extension.form.http_foundation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension A Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension instance
     */
    protected function getForm_TypeExtension_Form_HttpFoundationService()
    {
        return $this->services['form.type_extension.form.http_foundation'] = new \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension(new \Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler(${($_ = isset($this->services['form.server_params']) ? $this->services['form.server_params'] : $this->getForm_ServerParamsService()) && false ?: '_'}));
    }

    /*
     * Gets the 'form.type_extension.form.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension instance
     */
    protected function getForm_TypeExtension_Form_ValidatorService()
    {
        return $this->services['form.type_extension.form.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension($this->get('validator'));
    }

    /*
     * Gets the 'form.type_extension.repeated.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension instance
     */
    protected function getForm_TypeExtension_Repeated_ValidatorService()
    {
        return $this->services['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension();
    }

    /*
     * Gets the 'form.type_extension.submit.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension instance
     */
    protected function getForm_TypeExtension_Submit_ValidatorService()
    {
        return $this->services['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension();
    }

    /*
     * Gets the 'form.type_extension.upload.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension instance
     */
    protected function getForm_TypeExtension_Upload_ValidatorService()
    {
        return $this->services['form.type_extension.upload.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension($this->get('translator.default'), 'validators');
    }

    /*
     * Gets the 'form.type_guesser.doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser A Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser instance
     */
    protected function getForm_TypeGuesser_DoctrineService()
    {
        return $this->services['form.type_guesser.doctrine'] = new \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser($this->get('doctrine'));
    }

    /*
     * Gets the 'form.type_guesser.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser A Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser instance
     */
    protected function getForm_TypeGuesser_ValidatorService()
    {
        return $this->services['form.type_guesser.validator'] = new \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser($this->get('validator'));
    }

    /*
     * Gets the 'fos_user.change_password.form.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Factory\FormFactory A FOS\UserBundle\Form\Factory\FormFactory instance
     */
    protected function getFosUser_ChangePassword_Form_FactoryService()
    {
        return $this->services['fos_user.change_password.form.factory'] = new \FOS\UserBundle\Form\Factory\FormFactory($this->get('form.factory'), 'fos_user_change_password_form', 'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType', array(0 => 'ChangePassword', 1 => 'Default'));
    }

    /*
     * Gets the 'fos_user.change_password.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Type\ChangePasswordFormType A FOS\UserBundle\Form\Type\ChangePasswordFormType instance
     */
    protected function getFosUser_ChangePassword_Form_TypeService()
    {
        return $this->services['fos_user.change_password.form.type'] = new \FOS\UserBundle\Form\Type\ChangePasswordFormType('UserBundle\\Entity\\User');
    }

    /*
     * Gets the 'fos_user.listener.authentication' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\EventListener\AuthenticationListener A FOS\UserBundle\EventListener\AuthenticationListener instance
     */
    protected function getFosUser_Listener_AuthenticationService()
    {
        return $this->services['fos_user.listener.authentication'] = new \FOS\UserBundle\EventListener\AuthenticationListener($this->get('fos_user.security.login_manager'), 'main');
    }

    /*
     * Gets the 'fos_user.listener.email_confirmation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\EventListener\EmailConfirmationListener A FOS\UserBundle\EventListener\EmailConfirmationListener instance
     */
    protected function getFosUser_Listener_EmailConfirmationService()
    {
        return $this->services['fos_user.listener.email_confirmation'] = new \FOS\UserBundle\EventListener\EmailConfirmationListener($this->get('fos_user.mailer'), $this->get('fos_user.util.token_generator'), $this->get('router'), $this->get('session'));
    }

    /*
     * Gets the 'fos_user.listener.flash' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\EventListener\FlashListener A FOS\UserBundle\EventListener\FlashListener instance
     */
    protected function getFosUser_Listener_FlashService()
    {
        return $this->services['fos_user.listener.flash'] = new \FOS\UserBundle\EventListener\FlashListener($this->get('session'), $this->get('translator.default'));
    }

    /*
     * Gets the 'fos_user.listener.resetting' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\EventListener\ResettingListener A FOS\UserBundle\EventListener\ResettingListener instance
     */
    protected function getFosUser_Listener_ResettingService()
    {
        return $this->services['fos_user.listener.resetting'] = new \FOS\UserBundle\EventListener\ResettingListener($this->get('router'), 86400);
    }

    /*
     * Gets the 'fos_user.mailer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Mailer\Mailer A FOS\UserBundle\Mailer\Mailer instance
     */
    protected function getFosUser_MailerService()
    {
        return $this->services['fos_user.mailer'] = new \FOS\UserBundle\Mailer\Mailer($this->get('swiftmailer.mailer.default'), $this->get('router'), $this->get('templating'), array('confirmation.template' => '@FOSUser/Registration/email.txt.twig', 'resetting.template' => '@FOSUser/Resetting/email.txt.twig', 'from_email' => array('confirmation' => array('contact@passeport-securite-interim-btp.fr' => 'Passeport Securite Interim BTP'), 'resetting' => array('contact@passeport-securite-interim-btp.fr' => 'Passeport Securite Interim BTP'))));
    }

    /*
     * Gets the 'fos_user.profile.form.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Factory\FormFactory A FOS\UserBundle\Form\Factory\FormFactory instance
     */
    protected function getFosUser_Profile_Form_FactoryService()
    {
        return $this->services['fos_user.profile.form.factory'] = new \FOS\UserBundle\Form\Factory\FormFactory($this->get('form.factory'), 'fos_user_profile_form', 'FOS\\UserBundle\\Form\\Type\\ProfileFormType', array(0 => 'Profile', 1 => 'Default'));
    }

    /*
     * Gets the 'fos_user.profile.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Type\ProfileFormType A FOS\UserBundle\Form\Type\ProfileFormType instance
     */
    protected function getFosUser_Profile_Form_TypeService()
    {
        return $this->services['fos_user.profile.form.type'] = new \FOS\UserBundle\Form\Type\ProfileFormType('UserBundle\\Entity\\User');
    }

    /*
     * Gets the 'fos_user.registration.form.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Factory\FormFactory A FOS\UserBundle\Form\Factory\FormFactory instance
     */
    protected function getFosUser_Registration_Form_FactoryService()
    {
        return $this->services['fos_user.registration.form.factory'] = new \FOS\UserBundle\Form\Factory\FormFactory($this->get('form.factory'), 'fos_user_registration_form', 'UserBundle\\Form\\RegistrationType', array(0 => 'Registration', 1 => 'Default'));
    }

    /*
     * Gets the 'fos_user.registration.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Type\RegistrationFormType A FOS\UserBundle\Form\Type\RegistrationFormType instance
     */
    protected function getFosUser_Registration_Form_TypeService()
    {
        return $this->services['fos_user.registration.form.type'] = new \FOS\UserBundle\Form\Type\RegistrationFormType('UserBundle\\Entity\\User');
    }

    /*
     * Gets the 'fos_user.resetting.form.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Factory\FormFactory A FOS\UserBundle\Form\Factory\FormFactory instance
     */
    protected function getFosUser_Resetting_Form_FactoryService()
    {
        return $this->services['fos_user.resetting.form.factory'] = new \FOS\UserBundle\Form\Factory\FormFactory($this->get('form.factory'), 'fos_user_resetting_form', 'FOS\\UserBundle\\Form\\Type\\ResettingFormType', array(0 => 'ResetPassword', 1 => 'Default'));
    }

    /*
     * Gets the 'fos_user.resetting.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Type\ResettingFormType A FOS\UserBundle\Form\Type\ResettingFormType instance
     */
    protected function getFosUser_Resetting_Form_TypeService()
    {
        return $this->services['fos_user.resetting.form.type'] = new \FOS\UserBundle\Form\Type\ResettingFormType('UserBundle\\Entity\\User');
    }

    /*
     * Gets the 'fos_user.security.interactive_login_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\EventListener\LastLoginListener A FOS\UserBundle\EventListener\LastLoginListener instance
     */
    protected function getFosUser_Security_InteractiveLoginListenerService()
    {
        return $this->services['fos_user.security.interactive_login_listener'] = new \FOS\UserBundle\EventListener\LastLoginListener($this->get('fos_user.user_manager'));
    }

    /*
     * Gets the 'fos_user.security.login_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Security\LoginManager A FOS\UserBundle\Security\LoginManager instance
     */
    protected function getFosUser_Security_LoginManagerService()
    {
        return $this->services['fos_user.security.login_manager'] = new \FOS\UserBundle\Security\LoginManager($this->get('security.token_storage'), ${($_ = isset($this->services['security.user_checker']) ? $this->services['security.user_checker'] : $this->getSecurity_UserCheckerService()) && false ?: '_'}, ${($_ = isset($this->services['security.authentication.session_strategy']) ? $this->services['security.authentication.session_strategy'] : $this->getSecurity_Authentication_SessionStrategyService()) && false ?: '_'}, $this->get('request_stack'), NULL);
    }

    /*
     * Gets the 'fos_user.user_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \FOS\UserBundle\Doctrine\UserManager A FOS\UserBundle\Doctrine\UserManager instance
     */
    protected function getFosUser_UserManagerService($lazyLoad = true)
    {
        return $this->services['fos_user.user_manager'] = new \FOS\UserBundle\Doctrine\UserManager(${($_ = isset($this->services['fos_user.util.password_updater']) ? $this->services['fos_user.util.password_updater'] : $this->getFosUser_Util_PasswordUpdaterService()) && false ?: '_'}, ${($_ = isset($this->services['fos_user.util.canonical_fields_updater']) ? $this->services['fos_user.util.canonical_fields_updater'] : $this->getFosUser_Util_CanonicalFieldsUpdaterService()) && false ?: '_'}, $this->get('doctrine')->getManager(NULL), 'UserBundle\\Entity\\User');
    }

    /*
     * Gets the 'fos_user.username_form_type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Type\UsernameFormType A FOS\UserBundle\Form\Type\UsernameFormType instance
     */
    protected function getFosUser_UsernameFormTypeService()
    {
        return $this->services['fos_user.username_form_type'] = new \FOS\UserBundle\Form\Type\UsernameFormType(new \FOS\UserBundle\Form\DataTransformer\UserToUsernameTransformer($this->get('fos_user.user_manager')));
    }

    /*
     * Gets the 'fos_user.util.email_canonicalizer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Util\Canonicalizer A FOS\UserBundle\Util\Canonicalizer instance
     */
    protected function getFosUser_Util_EmailCanonicalizerService()
    {
        return $this->services['fos_user.util.email_canonicalizer'] = new \FOS\UserBundle\Util\Canonicalizer();
    }

    /*
     * Gets the 'fos_user.util.token_generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Util\TokenGenerator A FOS\UserBundle\Util\TokenGenerator instance
     */
    protected function getFosUser_Util_TokenGeneratorService()
    {
        return $this->services['fos_user.util.token_generator'] = new \FOS\UserBundle\Util\TokenGenerator();
    }

    /*
     * Gets the 'fos_user.util.user_manipulator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Util\UserManipulator A FOS\UserBundle\Util\UserManipulator instance
     */
    protected function getFosUser_Util_UserManipulatorService()
    {
        return $this->services['fos_user.util.user_manipulator'] = new \FOS\UserBundle\Util\UserManipulator($this->get('fos_user.user_manager'), $this->get('event_dispatcher'), $this->get('request_stack'));
    }

    /*
     * Gets the 'fragment.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler A Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler instance
     */
    protected function getFragment_HandlerService()
    {
        $this->services['fragment.handler'] = $instance = new \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler($this, $this->get('request_stack'), false);

        $instance->addRendererService('inline', 'fragment.renderer.inline');
        $instance->addRendererService('hinclude', 'fragment.renderer.hinclude');
        $instance->addRendererService('hinclude', 'fragment.renderer.hinclude');
        $instance->addRendererService('esi', 'fragment.renderer.esi');
        $instance->addRendererService('ssi', 'fragment.renderer.ssi');

        return $instance;
    }

    /*
     * Gets the 'fragment.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\FragmentListener A Symfony\Component\HttpKernel\EventListener\FragmentListener instance
     */
    protected function getFragment_ListenerService()
    {
        return $this->services['fragment.listener'] = new \Symfony\Component\HttpKernel\EventListener\FragmentListener($this->get('uri_signer'), '/_fragment');
    }

    /*
     * Gets the 'fragment.renderer.esi' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer A Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer instance
     */
    protected function getFragment_Renderer_EsiService()
    {
        $this->services['fragment.renderer.esi'] = $instance = new \Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer(NULL, $this->get('fragment.renderer.inline'), $this->get('uri_signer'));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /*
     * Gets the 'fragment.renderer.hinclude' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer A Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer instance
     */
    protected function getFragment_Renderer_HincludeService()
    {
        $this->services['fragment.renderer.hinclude'] = $instance = new \Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer($this->get('twig'), $this->get('uri_signer'), NULL);

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /*
     * Gets the 'fragment.renderer.inline' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer A Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer instance
     */
    protected function getFragment_Renderer_InlineService()
    {
        $this->services['fragment.renderer.inline'] = $instance = new \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer($this->get('http_kernel'), $this->get('event_dispatcher'));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /*
     * Gets the 'fragment.renderer.ssi' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer A Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer instance
     */
    protected function getFragment_Renderer_SsiService()
    {
        $this->services['fragment.renderer.ssi'] = $instance = new \Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer(NULL, $this->get('fragment.renderer.inline'), $this->get('uri_signer'));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /*
     * Gets the 'http_kernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel A Symfony\Component\HttpKernel\HttpKernel instance
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel($this->get('event_dispatcher'), new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, ${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : $this->getControllerNameConverterService()) && false ?: '_'}, $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE)), $this->get('request_stack'), new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory(), array(0 => new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver(), 1 => new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver(), 2 => new \Symfony\Bundle\SecurityBundle\SecurityUserValueResolver($this->get('security.token_storage')), 3 => new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver(), 4 => new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver())));
    }

    /*
     * Gets the 'kernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getKernelService()
    {
        throw new RuntimeException('You have requested a synthetic service ("kernel"). The DIC does not know how to construct this service.');
    }

    /*
     * Gets the 'kernel.class_cache.cache_warmer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassCacheCacheWarmer A Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassCacheCacheWarmer instance
     */
    protected function getKernel_ClassCache_CacheWarmerService()
    {
        return $this->services['kernel.class_cache.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassCacheCacheWarmer(array(0 => 'Symfony\\Component\\HttpFoundation\\ParameterBag', 1 => 'Symfony\\Component\\HttpFoundation\\HeaderBag', 2 => 'Symfony\\Component\\HttpFoundation\\FileBag', 3 => 'Symfony\\Component\\HttpFoundation\\ServerBag', 4 => 'Symfony\\Component\\HttpFoundation\\Request', 5 => 'Symfony\\Component\\HttpKernel\\Kernel', 6 => 'Symfony\\Component\\ClassLoader\\ClassCollectionLoader', 7 => 'Symfony\\Component\\ClassLoader\\ApcClassLoader'));
    }

    /*
     * Gets the 'knp_paginator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Component\Pager\Paginator A Knp\Component\Pager\Paginator instance
     */
    protected function getKnpPaginatorService()
    {
        $this->services['knp_paginator'] = $instance = new \Knp\Component\Pager\Paginator($this->get('event_dispatcher'));

        $instance->setDefaultPaginatorOptions(array('pageParameterName' => 'page', 'sortFieldParameterName' => 'sort', 'sortDirectionParameterName' => 'direction', 'filterFieldParameterName' => 'filterField', 'filterValueParameterName' => 'filterValue', 'distinct' => true));

        return $instance;
    }

    /*
     * Gets the 'knp_paginator.helper.processor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Bundle\PaginatorBundle\Helper\Processor A Knp\Bundle\PaginatorBundle\Helper\Processor instance
     */
    protected function getKnpPaginator_Helper_ProcessorService()
    {
        return $this->services['knp_paginator.helper.processor'] = new \Knp\Bundle\PaginatorBundle\Helper\Processor($this->get('router'), $this->get('translator.default'));
    }

    /*
     * Gets the 'knp_paginator.subscriber.filtration' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Component\Pager\Event\Subscriber\Filtration\FiltrationSubscriber A Knp\Component\Pager\Event\Subscriber\Filtration\FiltrationSubscriber instance
     */
    protected function getKnpPaginator_Subscriber_FiltrationService()
    {
        return $this->services['knp_paginator.subscriber.filtration'] = new \Knp\Component\Pager\Event\Subscriber\Filtration\FiltrationSubscriber();
    }

    /*
     * Gets the 'knp_paginator.subscriber.paginate' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Component\Pager\Event\Subscriber\Paginate\PaginationSubscriber A Knp\Component\Pager\Event\Subscriber\Paginate\PaginationSubscriber instance
     */
    protected function getKnpPaginator_Subscriber_PaginateService()
    {
        return $this->services['knp_paginator.subscriber.paginate'] = new \Knp\Component\Pager\Event\Subscriber\Paginate\PaginationSubscriber();
    }

    /*
     * Gets the 'knp_paginator.subscriber.sliding_pagination' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Bundle\PaginatorBundle\Subscriber\SlidingPaginationSubscriber A Knp\Bundle\PaginatorBundle\Subscriber\SlidingPaginationSubscriber instance
     */
    protected function getKnpPaginator_Subscriber_SlidingPaginationService()
    {
        return $this->services['knp_paginator.subscriber.sliding_pagination'] = new \Knp\Bundle\PaginatorBundle\Subscriber\SlidingPaginationSubscriber(array('defaultPaginationTemplate' => 'KnpPaginatorBundle:Pagination:twitter_bootstrap_v3_pagination.html.twig', 'defaultSortableTemplate' => 'KnpPaginatorBundle:Pagination:sortable_link.html.twig', 'defaultFiltrationTemplate' => 'KnpPaginatorBundle:Pagination:filtration.html.twig', 'defaultPageRange' => 5));
    }

    /*
     * Gets the 'knp_paginator.subscriber.sortable' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Component\Pager\Event\Subscriber\Sortable\SortableSubscriber A Knp\Component\Pager\Event\Subscriber\Sortable\SortableSubscriber instance
     */
    protected function getKnpPaginator_Subscriber_SortableService()
    {
        return $this->services['knp_paginator.subscriber.sortable'] = new \Knp\Component\Pager\Event\Subscriber\Sortable\SortableSubscriber();
    }

    /*
     * Gets the 'knp_paginator.twig.extension.pagination' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension A Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension instance
     */
    protected function getKnpPaginator_Twig_Extension_PaginationService()
    {
        return $this->services['knp_paginator.twig.extension.pagination'] = new \Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension($this->get('knp_paginator.helper.processor'));
    }

    /*
     * Gets the 'knp_snappy.image' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Bundle\SnappyBundle\Snappy\LoggableGenerator A Knp\Bundle\SnappyBundle\Snappy\LoggableGenerator instance
     */
    protected function getKnpSnappy_ImageService()
    {
        $a = new \Knp\Snappy\Image('wkhtmltoimage', array(), array());
        $a->setTemporaryFolder('/app/app/../web/attestations');

        return $this->services['knp_snappy.image'] = new \Knp\Bundle\SnappyBundle\Snappy\LoggableGenerator($a, $this->get('monolog.logger.snappy', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /*
     * Gets the 'knp_snappy.pdf' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Bundle\SnappyBundle\Snappy\LoggableGenerator A Knp\Bundle\SnappyBundle\Snappy\LoggableGenerator instance
     */
    protected function getKnpSnappy_PdfService()
    {
        $a = new \Knp\Snappy\Pdf('/app/app/../vendor/h4cc/wkhtmltopdf-amd64/bin/wkhtmltopdf-amd64', array('viewport-size' => '‘1024x768’', 'page-size' => 'A4'), array());
        $a->setTemporaryFolder('/app/app/../web/attestations');

        return $this->services['knp_snappy.pdf'] = new \Knp\Bundle\SnappyBundle\Snappy\LoggableGenerator($a, $this->get('monolog.logger.snappy', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /*
     * Gets the 'locale_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener A Symfony\Component\HttpKernel\EventListener\LocaleListener instance
     */
    protected function getLocaleListenerService()
    {
        return $this->services['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener($this->get('request_stack'), 'fr', $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /*
     * Gets the 'logger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getLoggerService()
    {
        $this->services['logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->useMicrosecondTimestamps(true);
        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /*
     * Gets the 'monolog.activation_strategy.not_found' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\FingersCrossed\NotFoundActivationStrategy A Symfony\Bridge\Monolog\Handler\FingersCrossed\NotFoundActivationStrategy instance
     */
    protected function getMonolog_ActivationStrategy_NotFoundService()
    {
        return $this->services['monolog.activation_strategy.not_found'] = new \Symfony\Bridge\Monolog\Handler\FingersCrossed\NotFoundActivationStrategy();
    }

    /*
     * Gets the 'monolog.handler.console' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ConsoleHandler A Symfony\Bridge\Monolog\Handler\ConsoleHandler instance
     */
    protected function getMonolog_Handler_ConsoleService()
    {
        $this->services['monolog.handler.console'] = $instance = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array());

        $instance->pushProcessor(${($_ = isset($this->services['monolog.processor.psr_log_message']) ? $this->services['monolog.processor.psr_log_message'] : $this->getMonolog_Processor_PsrLogMessageService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the 'monolog.handler.fingers_crossed.error_level_activation_strategy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Monolog\Handler\FingersCrossed\ErrorLevelActivationStrategy A Monolog\Handler\FingersCrossed\ErrorLevelActivationStrategy instance
     */
    protected function getMonolog_Handler_FingersCrossed_ErrorLevelActivationStrategyService()
    {
        return $this->services['monolog.handler.fingers_crossed.error_level_activation_strategy'] = new \Monolog\Handler\FingersCrossed\ErrorLevelActivationStrategy();
    }

    /*
     * Gets the 'monolog.handler.main' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Monolog\Handler\FingersCrossedHandler A Monolog\Handler\FingersCrossedHandler instance
     */
    protected function getMonolog_Handler_MainService()
    {
        $this->services['monolog.handler.main'] = $instance = new \Monolog\Handler\FingersCrossedHandler($this->get('monolog.handler.nested'), 400, 0, true, true, NULL);

        $instance->pushProcessor(${($_ = isset($this->services['monolog.processor.psr_log_message']) ? $this->services['monolog.processor.psr_log_message'] : $this->getMonolog_Processor_PsrLogMessageService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the 'monolog.handler.nested' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Monolog\Handler\StreamHandler A Monolog\Handler\StreamHandler instance
     */
    protected function getMonolog_Handler_NestedService()
    {
        $this->services['monolog.handler.nested'] = $instance = new \Monolog\Handler\StreamHandler(($this->targetDirs[2].'/logs/prod.log'), 100, true, NULL);

        $instance->pushProcessor(${($_ = isset($this->services['monolog.processor.psr_log_message']) ? $this->services['monolog.processor.psr_log_message'] : $this->getMonolog_Processor_PsrLogMessageService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the 'monolog.handler.null_internal' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Monolog\Handler\NullHandler A Monolog\Handler\NullHandler instance
     */
    protected function getMonolog_Handler_NullInternalService()
    {
        return $this->services['monolog.handler.null_internal'] = new \Monolog\Handler\NullHandler();
    }

    /*
     * Gets the 'monolog.logger.assetic' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_AsseticService()
    {
        $this->services['monolog.logger.assetic'] = $instance = new \Symfony\Bridge\Monolog\Logger('assetic');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /*
     * Gets the 'monolog.logger.cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_CacheService()
    {
        $this->services['monolog.logger.cache'] = $instance = new \Symfony\Bridge\Monolog\Logger('cache');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /*
     * Gets the 'monolog.logger.doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_DoctrineService()
    {
        $this->services['monolog.logger.doctrine'] = $instance = new \Symfony\Bridge\Monolog\Logger('doctrine');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /*
     * Gets the 'monolog.logger.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_PhpService()
    {
        $this->services['monolog.logger.php'] = $instance = new \Symfony\Bridge\Monolog\Logger('php');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /*
     * Gets the 'monolog.logger.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->services['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /*
     * Gets the 'monolog.logger.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_RouterService()
    {
        $this->services['monolog.logger.router'] = $instance = new \Symfony\Bridge\Monolog\Logger('router');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /*
     * Gets the 'monolog.logger.security' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_SecurityService()
    {
        $this->services['monolog.logger.security'] = $instance = new \Symfony\Bridge\Monolog\Logger('security');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /*
     * Gets the 'monolog.logger.snappy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_SnappyService()
    {
        $this->services['monolog.logger.snappy'] = $instance = new \Symfony\Bridge\Monolog\Logger('snappy');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /*
     * Gets the 'monolog.logger.translation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_TranslationService()
    {
        $this->services['monolog.logger.translation'] = $instance = new \Symfony\Bridge\Monolog\Logger('translation');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /*
     * Gets the 'oneup_uploader.chunk_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Oneup\UploaderBundle\Uploader\Chunk\ChunkManager A Oneup\UploaderBundle\Uploader\Chunk\ChunkManager instance
     */
    protected function getOneupUploader_ChunkManagerService()
    {
        return $this->services['oneup_uploader.chunk_manager'] = new \Oneup\UploaderBundle\Uploader\Chunk\ChunkManager(array('maxage' => 604800, 'storage' => array('type' => 'filesystem', 'filesystem' => NULL, 'directory' => (__DIR__.'/uploader/chunks'), 'stream_wrapper' => NULL, 'sync_buffer_size' => '100K', 'prefix' => 'chunks'), 'load_distribution' => true), $this->get('oneup_uploader.chunks_storage'));
    }

    /*
     * Gets the 'oneup_uploader.chunks_storage' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Oneup\UploaderBundle\Uploader\Chunk\Storage\FilesystemStorage A Oneup\UploaderBundle\Uploader\Chunk\Storage\FilesystemStorage instance
     */
    protected function getOneupUploader_ChunksStorageService()
    {
        return $this->services['oneup_uploader.chunks_storage'] = new \Oneup\UploaderBundle\Uploader\Chunk\Storage\FilesystemStorage((__DIR__.'/uploader/chunks'));
    }

    /*
     * Gets the 'oneup_uploader.controller.attestations' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Oneup\UploaderBundle\Controller\BlueimpController A Oneup\UploaderBundle\Controller\BlueimpController instance
     */
    protected function getOneupUploader_Controller_AttestationsService()
    {
        return $this->services['oneup_uploader.controller.attestations'] = new \Oneup\UploaderBundle\Controller\BlueimpController($this, $this->get('oneup_uploader.storage.attestations'), ${($_ = isset($this->services['oneup_uploader.error_handler.blueimp']) ? $this->services['oneup_uploader.error_handler.blueimp'] : $this->getOneupUploader_ErrorHandler_BlueimpService()) && false ?: '_'}, array('frontend' => 'blueimp', 'storage' => array('directory' => '/app/app/../web/attestations', 'service' => NULL, 'type' => 'filesystem', 'filesystem' => NULL, 'stream_wrapper' => NULL, 'sync_buffer_size' => '100K'), 'custom_frontend' => array('name' => NULL, 'class' => NULL), 'route_prefix' => '', 'allowed_mimetypes' => array(), 'disallowed_mimetypes' => array(), 'error_handler' => NULL, 'max_size' => 9223372036854775807, 'use_orphanage' => false, 'enable_progress' => false, 'enable_cancelation' => false, 'namer' => 'oneup_uploader.namer.uniqid', 'root_folder' => false), 'attestations');
    }

    /*
     * Gets the 'oneup_uploader.controller.images' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Oneup\UploaderBundle\Controller\BlueimpController A Oneup\UploaderBundle\Controller\BlueimpController instance
     */
    protected function getOneupUploader_Controller_ImagesService()
    {
        return $this->services['oneup_uploader.controller.images'] = new \Oneup\UploaderBundle\Controller\BlueimpController($this, $this->get('oneup_uploader.storage.images'), ${($_ = isset($this->services['oneup_uploader.error_handler.blueimp']) ? $this->services['oneup_uploader.error_handler.blueimp'] : $this->getOneupUploader_ErrorHandler_BlueimpService()) && false ?: '_'}, array('frontend' => 'blueimp', 'storage' => array('directory' => '/app/app/../web/images', 'service' => NULL, 'type' => 'filesystem', 'filesystem' => NULL, 'stream_wrapper' => NULL, 'sync_buffer_size' => '100K'), 'custom_frontend' => array('name' => NULL, 'class' => NULL), 'route_prefix' => '', 'allowed_mimetypes' => array(), 'disallowed_mimetypes' => array(), 'error_handler' => NULL, 'max_size' => 9223372036854775807, 'use_orphanage' => false, 'enable_progress' => false, 'enable_cancelation' => false, 'namer' => 'oneup_uploader.namer.uniqid', 'root_folder' => false), 'images');
    }

    /*
     * Gets the 'oneup_uploader.controller.sounds' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Oneup\UploaderBundle\Controller\BlueimpController A Oneup\UploaderBundle\Controller\BlueimpController instance
     */
    protected function getOneupUploader_Controller_SoundsService()
    {
        return $this->services['oneup_uploader.controller.sounds'] = new \Oneup\UploaderBundle\Controller\BlueimpController($this, $this->get('oneup_uploader.storage.sounds'), ${($_ = isset($this->services['oneup_uploader.error_handler.blueimp']) ? $this->services['oneup_uploader.error_handler.blueimp'] : $this->getOneupUploader_ErrorHandler_BlueimpService()) && false ?: '_'}, array('frontend' => 'blueimp', 'storage' => array('directory' => '/app/app/../web/sounds', 'service' => NULL, 'type' => 'filesystem', 'filesystem' => NULL, 'stream_wrapper' => NULL, 'sync_buffer_size' => '100K'), 'custom_frontend' => array('name' => NULL, 'class' => NULL), 'route_prefix' => '', 'allowed_mimetypes' => array(), 'disallowed_mimetypes' => array(), 'error_handler' => NULL, 'max_size' => 9223372036854775807, 'use_orphanage' => false, 'enable_progress' => false, 'enable_cancelation' => false, 'namer' => 'oneup_uploader.namer.uniqid', 'root_folder' => false), 'sounds');
    }

    /*
     * Gets the 'oneup_uploader.namer.uniqid' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Oneup\UploaderBundle\Uploader\Naming\UniqidNamer A Oneup\UploaderBundle\Uploader\Naming\UniqidNamer instance
     */
    protected function getOneupUploader_Namer_UniqidService()
    {
        return $this->services['oneup_uploader.namer.uniqid'] = new \Oneup\UploaderBundle\Uploader\Naming\UniqidNamer();
    }

    /*
     * Gets the 'oneup_uploader.orphanage_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Oneup\UploaderBundle\Uploader\Orphanage\OrphanageManager A Oneup\UploaderBundle\Uploader\Orphanage\OrphanageManager instance
     */
    protected function getOneupUploader_OrphanageManagerService()
    {
        return $this->services['oneup_uploader.orphanage_manager'] = new \Oneup\UploaderBundle\Uploader\Orphanage\OrphanageManager($this, array('maxage' => 604800, 'directory' => (__DIR__.'/uploader/orphanage')));
    }

    /*
     * Gets the 'oneup_uploader.routing.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Oneup\UploaderBundle\Routing\RouteLoader A Oneup\UploaderBundle\Routing\RouteLoader instance
     */
    protected function getOneupUploader_Routing_LoaderService()
    {
        return $this->services['oneup_uploader.routing.loader'] = new \Oneup\UploaderBundle\Routing\RouteLoader(array('images' => array(0 => 'oneup_uploader.controller.images', 1 => array('enable_progress' => false, 'enable_cancelation' => false, 'route_prefix' => '')), 'sounds' => array(0 => 'oneup_uploader.controller.sounds', 1 => array('enable_progress' => false, 'enable_cancelation' => false, 'route_prefix' => '')), 'attestations' => array(0 => 'oneup_uploader.controller.attestations', 1 => array('enable_progress' => false, 'enable_cancelation' => false, 'route_prefix' => ''))));
    }

    /*
     * Gets the 'oneup_uploader.storage.attestations' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Oneup\UploaderBundle\Uploader\Storage\FilesystemStorage A Oneup\UploaderBundle\Uploader\Storage\FilesystemStorage instance
     */
    protected function getOneupUploader_Storage_AttestationsService()
    {
        return $this->services['oneup_uploader.storage.attestations'] = new \Oneup\UploaderBundle\Uploader\Storage\FilesystemStorage('/app/app/../web/attestations');
    }

    /*
     * Gets the 'oneup_uploader.storage.images' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Oneup\UploaderBundle\Uploader\Storage\FilesystemStorage A Oneup\UploaderBundle\Uploader\Storage\FilesystemStorage instance
     */
    protected function getOneupUploader_Storage_ImagesService()
    {
        return $this->services['oneup_uploader.storage.images'] = new \Oneup\UploaderBundle\Uploader\Storage\FilesystemStorage('/app/app/../web/images');
    }

    /*
     * Gets the 'oneup_uploader.storage.sounds' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Oneup\UploaderBundle\Uploader\Storage\FilesystemStorage A Oneup\UploaderBundle\Uploader\Storage\FilesystemStorage instance
     */
    protected function getOneupUploader_Storage_SoundsService()
    {
        return $this->services['oneup_uploader.storage.sounds'] = new \Oneup\UploaderBundle\Uploader\Storage\FilesystemStorage('/app/app/../web/sounds');
    }

    /*
     * Gets the 'oneup_uploader.templating.uploader_helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Oneup\UploaderBundle\Templating\Helper\UploaderHelper A Oneup\UploaderBundle\Templating\Helper\UploaderHelper instance
     */
    protected function getOneupUploader_Templating_UploaderHelperService()
    {
        return $this->services['oneup_uploader.templating.uploader_helper'] = new \Oneup\UploaderBundle\Templating\Helper\UploaderHelper($this->get('router'), array('images' => 52428800, 'sounds' => 52428800, 'attestations' => 52428800));
    }

    /*
     * Gets the 'oneup_uploader.twig.extension.uploader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Oneup\UploaderBundle\Twig\Extension\UploaderExtension A Oneup\UploaderBundle\Twig\Extension\UploaderExtension instance
     */
    protected function getOneupUploader_Twig_Extension_UploaderService()
    {
        return $this->services['oneup_uploader.twig.extension.uploader'] = new \Oneup\UploaderBundle\Twig\Extension\UploaderExtension($this->get('oneup_uploader.templating.uploader_helper'));
    }

    /*
     * Gets the 'oneup_uploader.validation_listener.allowed_mimetype' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Oneup\UploaderBundle\EventListener\AllowedMimetypeValidationListener A Oneup\UploaderBundle\EventListener\AllowedMimetypeValidationListener instance
     */
    protected function getOneupUploader_ValidationListener_AllowedMimetypeService()
    {
        return $this->services['oneup_uploader.validation_listener.allowed_mimetype'] = new \Oneup\UploaderBundle\EventListener\AllowedMimetypeValidationListener();
    }

    /*
     * Gets the 'oneup_uploader.validation_listener.disallowed_mimetype' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Oneup\UploaderBundle\EventListener\DisallowedMimetypeValidationListener A Oneup\UploaderBundle\EventListener\DisallowedMimetypeValidationListener instance
     */
    protected function getOneupUploader_ValidationListener_DisallowedMimetypeService()
    {
        return $this->services['oneup_uploader.validation_listener.disallowed_mimetype'] = new \Oneup\UploaderBundle\EventListener\DisallowedMimetypeValidationListener();
    }

    /*
     * Gets the 'oneup_uploader.validation_listener.max_size' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Oneup\UploaderBundle\EventListener\MaxSizeValidationListener A Oneup\UploaderBundle\EventListener\MaxSizeValidationListener instance
     */
    protected function getOneupUploader_ValidationListener_MaxSizeService()
    {
        return $this->services['oneup_uploader.validation_listener.max_size'] = new \Oneup\UploaderBundle\EventListener\MaxSizeValidationListener();
    }

    /*
     * Gets the 'property_accessor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\PropertyAccess\PropertyAccessor A Symfony\Component\PropertyAccess\PropertyAccessor instance
     */
    protected function getPropertyAccessorService()
    {
        return $this->services['property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor(false, false, \Symfony\Component\PropertyAccess\PropertyAccessor::createCache('DboxlLt+Qw', NULL, 'Z67oXFu5fRVwan9fAj7HxN', $this->get('monolog.logger.cache', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
    }

    /*
     * Gets the 'request_stack' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack A Symfony\Component\HttpFoundation\RequestStack instance
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /*
     * Gets the 'response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ResponseListener A Symfony\Component\HttpKernel\EventListener\ResponseListener instance
     */
    protected function getResponseListenerService()
    {
        return $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }

    /*
     * Gets the 'router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router A Symfony\Bundle\FrameworkBundle\Routing\Router instance
     */
    protected function getRouterService()
    {
        $this->services['router'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router($this, '/app/app/config/routing.yml', array('cache_dir' => __DIR__, 'debug' => false, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'appProdProjectContainerUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'appProdProjectContainerUrlMatcher', 'strict_requirements' => NULL), ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}, $this->get('monolog.logger.router', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->setConfigCacheFactory($this->get('config_cache_factory'));

        return $instance;
    }

    /*
     * Gets the 'router_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener A Symfony\Component\HttpKernel\EventListener\RouterListener instance
     */
    protected function getRouterListenerService()
    {
        return $this->services['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener($this->get('router'), $this->get('request_stack'), ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}, $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /*
     * Gets the 'routing.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader A Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader instance
     */
    protected function getRouting_LoaderService()
    {
        $a = $this->get('file_locator');
        $b = $this->get('annotation_reader');

        $c = new \Sensio\Bundle\FrameworkExtraBundle\Routing\AnnotatedRouteControllerLoader($b);

        $d = new \Symfony\Component\Config\Loader\LoaderResolver();
        $d->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\DirectoryLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\DependencyInjection\ServiceRouterLoader($this));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($a, $c));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($a, $c));
        $d->addLoader($c);
        $d->addLoader($this->get('oneup_uploader.routing.loader'));

        return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader(${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : $this->getControllerNameConverterService()) && false ?: '_'}, $d);
    }

    /*
     * Gets the 'security.authentication.guard_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Guard\GuardAuthenticatorHandler A Symfony\Component\Security\Guard\GuardAuthenticatorHandler instance
     */
    protected function getSecurity_Authentication_GuardHandlerService()
    {
        return $this->services['security.authentication.guard_handler'] = new \Symfony\Component\Security\Guard\GuardAuthenticatorHandler($this->get('security.token_storage'), $this->get('event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /*
     * Gets the 'security.authentication_utils' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Http\Authentication\AuthenticationUtils A Symfony\Component\Security\Http\Authentication\AuthenticationUtils instance
     */
    protected function getSecurity_AuthenticationUtilsService()
    {
        return $this->services['security.authentication_utils'] = new \Symfony\Component\Security\Http\Authentication\AuthenticationUtils($this->get('request_stack'));
    }

    /*
     * Gets the 'security.authorization_checker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker A Symfony\Component\Security\Core\Authorization\AuthorizationChecker instance
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker($this->get('security.token_storage'), ${($_ = isset($this->services['security.authentication.manager']) ? $this->services['security.authentication.manager'] : $this->getSecurity_Authentication_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['security.access.decision_manager']) ? $this->services['security.access.decision_manager'] : $this->getSecurity_Access_DecisionManagerService()) && false ?: '_'}, false);
    }

    /*
     * Gets the 'security.csrf.token_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Csrf\CsrfTokenManager A Symfony\Component\Security\Csrf\CsrfTokenManager instance
     */
    protected function getSecurity_Csrf_TokenManagerService()
    {
        return $this->services['security.csrf.token_manager'] = new \Symfony\Component\Security\Csrf\CsrfTokenManager(new \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator(), new \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage($this->get('session')));
    }

    /*
     * Gets the 'security.encoder_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\EncoderFactory A Symfony\Component\Security\Core\Encoder\EncoderFactory instance
     */
    protected function getSecurity_EncoderFactoryService()
    {
        return $this->services['security.encoder_factory'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(array('FOS\\UserBundle\\Model\\UserInterface' => array('class' => 'Symfony\\Component\\Security\\Core\\Encoder\\BCryptPasswordEncoder', 'arguments' => array(0 => 13))));
    }

    /*
     * Gets the 'security.firewall' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Http\Firewall A Symfony\Component\Security\Http\Firewall instance
     */
    protected function getSecurity_FirewallService()
    {
        return $this->services['security.firewall'] = new \Symfony\Component\Security\Http\Firewall(new \Symfony\Bundle\SecurityBundle\Security\FirewallMap($this, array('security.firewall.map.context.dev' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/'), 'security.firewall.map.context.main' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/'))), $this->get('event_dispatcher'));
    }

    /*
     * Gets the 'security.firewall.map.context.dev' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext A Symfony\Bundle\SecurityBundle\Security\FirewallContext instance
     */
    protected function getSecurity_Firewall_Map_Context_DevService()
    {
        return $this->services['security.firewall.map.context.dev'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(), NULL, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('dev', 'security.user_checker', 'security.request_matcher.5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1d', false, '', '', '', '', '', '', array()));
    }

    /*
     * Gets the 'security.firewall.map.context.main' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext A Symfony\Bundle\SecurityBundle\Security\FirewallContext instance
     */
    protected function getSecurity_Firewall_Map_Context_MainService()
    {
        $a = $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $b = $this->get('security.token_storage');
        $c = ${($_ = isset($this->services['fos_user.user_provider.username_email']) ? $this->services['fos_user.user_provider.username_email'] : $this->getFosUser_UserProvider_UsernameEmailService()) && false ?: '_'};
        $d = $this->get('event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $e = ${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : $this->getSecurity_Authentication_TrustResolverService()) && false ?: '_'};
        $f = $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $g = $this->get('http_kernel');
        $h = ${($_ = isset($this->services['security.authentication.manager']) ? $this->services['security.authentication.manager'] : $this->getSecurity_Authentication_ManagerService()) && false ?: '_'};
        $i = ${($_ = isset($this->services['security.access.decision_manager']) ? $this->services['security.access.decision_manager'] : $this->getSecurity_Access_DecisionManagerService()) && false ?: '_'};

        $j = new \Symfony\Component\HttpFoundation\RequestMatcher('^/login');

        $k = new \Symfony\Component\HttpFoundation\RequestMatcher('^/inscription');

        $l = new \Symfony\Component\HttpFoundation\RequestMatcher('^/inscription/confirmed');

        $m = new \Symfony\Component\HttpFoundation\RequestMatcher('^/forgot-password');

        $n = new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/');

        $o = new \Symfony\Component\HttpFoundation\RequestMatcher('^/');

        $p = new \Symfony\Component\Security\Http\AccessMap();
        $p->add($j, array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $p->add($k, array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $p->add($l, array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $p->add($m, array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $p->add($n, array(0 => 'ROLE_ADMIN'), NULL);
        $p->add($o, array(0 => 'ROLE_USER'), NULL);

        $q = new \Symfony\Component\Security\Http\HttpUtils($f, $f);

        $r = new \Symfony\Component\Security\Http\Firewall\LogoutListener($b, $q, new \Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler($q, '/'), array('csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'logout', 'logout_path' => '/logout'));
        $r->addHandler(new \Symfony\Component\Security\Http\Logout\SessionLogoutHandler());

        $s = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler($q, array());
        $s->setOptions(array('always_use_default_target_path' => false, 'default_target_path' => '/', 'login_path' => '/login', 'target_path_parameter' => '_target_path', 'use_referer' => false));
        $s->setProviderKey('main');

        $t = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler($g, $q, array(), $a);
        $t->setOptions(array('login_path' => '/login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path'));

        return $this->services['security.firewall.map.context.main'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => new \Symfony\Component\Security\Http\Firewall\ChannelListener($p, new \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint(80, 443), $a), 1 => new \Symfony\Component\Security\Http\Firewall\ContextListener($b, array(0 => $c, 1 => new \Symfony\Component\Security\Core\User\InMemoryUserProvider()), 'main', $a, $d, $e), 2 => $r, 3 => new \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener($b, $h, ${($_ = isset($this->services['security.authentication.session_strategy']) ? $this->services['security.authentication.session_strategy'] : $this->getSecurity_Authentication_SessionStrategyService()) && false ?: '_'}, $q, 'main', $s, $t, array('check_path' => '/login_check', 'use_forward' => false, 'require_previous_session' => true, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'authenticate', 'post_only' => true), $a, $d, $this->get('security.csrf.token_manager')), 4 => new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener($b, '596f5a0abec346.84067364', $a, $h), 5 => new \Symfony\Component\Security\Http\Firewall\SwitchUserListener($b, $c, ${($_ = isset($this->services['security.user_checker']) ? $this->services['security.user_checker'] : $this->getSecurity_UserCheckerService()) && false ?: '_'}, 'main', $i, $a, '_switch_user', 'ROLE_ALLOWED_TO_SWITCH', $d), 6 => new \Symfony\Component\Security\Http\Firewall\AccessListener($b, $i, $p, $h)), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($b, $e, $q, 'main', new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint($g, $q, '/login', false), NULL, NULL, $a, false), new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('main', 'security.user_checker', 'security.request_matcher.a64d671f18e5575531d76c1d1154fdc4476cb8a79c02ed7a3469178c6d7b96b5ed4e60db', true, false, 'fos_user.user_provider.username_email', 'main', 'security.authentication.form_entry_point.main', NULL, NULL, array(0 => 'logout', 1 => 'switch_user', 2 => 'form_login', 3 => 'anonymous')));
    }

    /*
     * Gets the 'security.password_encoder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder A Symfony\Component\Security\Core\Encoder\UserPasswordEncoder instance
     */
    protected function getSecurity_PasswordEncoderService()
    {
        return $this->services['security.password_encoder'] = new \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder($this->get('security.encoder_factory'));
    }

    /*
     * Gets the 'security.rememberme.response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Http\RememberMe\ResponseListener A Symfony\Component\Security\Http\RememberMe\ResponseListener instance
     */
    protected function getSecurity_Rememberme_ResponseListenerService()
    {
        return $this->services['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener();
    }

    /*
     * Gets the 'security.token_storage' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage A Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage instance
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage();
    }

    /*
     * Gets the 'security.validator.user_password' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator A Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator instance
     */
    protected function getSecurity_Validator_UserPasswordService()
    {
        return $this->services['security.validator.user_password'] = new \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator($this->get('security.token_storage'), $this->get('security.encoder_factory'));
    }

    /*
     * Gets the 'sensio_framework_extra.cache.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener instance
     */
    protected function getSensioFrameworkExtra_Cache_ListenerService()
    {
        return $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener();
    }

    /*
     * Gets the 'sensio_framework_extra.controller.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener instance
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->services['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener($this->get('annotation_reader'));
    }

    /*
     * Gets the 'sensio_framework_extra.converter.datetime' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter instance
     */
    protected function getSensioFrameworkExtra_Converter_DatetimeService()
    {
        return $this->services['sensio_framework_extra.converter.datetime'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter();
    }

    /*
     * Gets the 'sensio_framework_extra.converter.doctrine.orm' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter instance
     */
    protected function getSensioFrameworkExtra_Converter_Doctrine_OrmService()
    {
        return $this->services['sensio_framework_extra.converter.doctrine.orm'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter($this->get('doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /*
     * Gets the 'sensio_framework_extra.converter.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener instance
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        return $this->services['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener($this->get('sensio_framework_extra.converter.manager'), true);
    }

    /*
     * Gets the 'sensio_framework_extra.converter.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager instance
     */
    protected function getSensioFrameworkExtra_Converter_ManagerService()
    {
        $this->services['sensio_framework_extra.converter.manager'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();

        $instance->add($this->get('sensio_framework_extra.converter.doctrine.orm'), 0, 'doctrine.orm');
        $instance->add($this->get('sensio_framework_extra.converter.datetime'), 0, 'datetime');

        return $instance;
    }

    /*
     * Gets the 'sensio_framework_extra.security.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener instance
     */
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        return $this->services['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener(NULL, new \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage(), ${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : $this->getSecurity_Authentication_TrustResolverService()) && false ?: '_'}, ${($_ = isset($this->services['security.role_hierarchy']) ? $this->services['security.role_hierarchy'] : $this->getSecurity_RoleHierarchyService()) && false ?: '_'}, $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /*
     * Gets the 'sensio_framework_extra.view.guesser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser A Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser instance
     */
    protected function getSensioFrameworkExtra_View_GuesserService()
    {
        return $this->services['sensio_framework_extra.view.guesser'] = new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser($this->get('kernel'));
    }

    /*
     * Gets the 'sensio_framework_extra.view.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener instance
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        return $this->services['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener($this);
    }

    /*
     * Gets the 'service_container' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getServiceContainerService()
    {
        throw new RuntimeException('You have requested a synthetic service ("service_container"). The DIC does not know how to construct this service.');
    }

    /*
     * Gets the 'session' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Session A Symfony\Component\HttpFoundation\Session\Session instance
     */
    protected function getSessionService()
    {
        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session($this->get('session.storage.native'), new \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag(), new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag());
    }

    /*
     * Gets the 'session.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler A Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler instance
     */
    protected function getSession_HandlerService()
    {
        return $this->services['session.handler'] = new \Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler('/app/app/../var/sessions/prod');
    }

    /*
     * Gets the 'session.save_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SaveSessionListener A Symfony\Component\HttpKernel\EventListener\SaveSessionListener instance
     */
    protected function getSession_SaveListenerService()
    {
        return $this->services['session.save_listener'] = new \Symfony\Component\HttpKernel\EventListener\SaveSessionListener();
    }

    /*
     * Gets the 'session.storage.filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage instance
     */
    protected function getSession_Storage_FilesystemService()
    {
        return $this->services['session.storage.filesystem'] = new \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage((__DIR__.'/sessions'), 'MOCKSESSID', ${($_ = isset($this->services['session.storage.metadata_bag']) ? $this->services['session.storage.metadata_bag'] : $this->getSession_Storage_MetadataBagService()) && false ?: '_'});
    }

    /*
     * Gets the 'session.storage.native' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage instance
     */
    protected function getSession_Storage_NativeService()
    {
        return $this->services['session.storage.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage(array('cookie_httponly' => true, 'gc_probability' => 1), $this->get('session.handler'), ${($_ = isset($this->services['session.storage.metadata_bag']) ? $this->services['session.storage.metadata_bag'] : $this->getSession_Storage_MetadataBagService()) && false ?: '_'});
    }

    /*
     * Gets the 'session.storage.php_bridge' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage instance
     */
    protected function getSession_Storage_PhpBridgeService()
    {
        return $this->services['session.storage.php_bridge'] = new \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage($this->get('session.handler'), ${($_ = isset($this->services['session.storage.metadata_bag']) ? $this->services['session.storage.metadata_bag'] : $this->getSession_Storage_MetadataBagService()) && false ?: '_'});
    }

    /*
     * Gets the 'session_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\SessionListener A Symfony\Bundle\FrameworkBundle\EventListener\SessionListener instance
     */
    protected function getSessionListenerService()
    {
        return $this->services['session_listener'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SessionListener($this);
    }

    /*
     * Gets the 'stof_doctrine_extensions.uploadable.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Stof\DoctrineExtensionsBundle\Uploadable\UploadableManager A Stof\DoctrineExtensionsBundle\Uploadable\UploadableManager instance
     */
    protected function getStofDoctrineExtensions_Uploadable_ManagerService()
    {
        $a = new \Gedmo\Uploadable\UploadableListener(new \Stof\DoctrineExtensionsBundle\Uploadable\MimeTypeGuesserAdapter());
        $a->setAnnotationReader($this->get('annotation_reader'));
        $a->setDefaultFileInfoClass('Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadedFileInfo');

        return $this->services['stof_doctrine_extensions.uploadable.manager'] = new \Stof\DoctrineExtensionsBundle\Uploadable\UploadableManager($a, 'Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadedFileInfo');
    }

    /*
     * Gets the 'streamed_response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener A Symfony\Component\HttpKernel\EventListener\StreamedResponseListener instance
     */
    protected function getStreamedResponseListenerService()
    {
        return $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener();
    }

    /*
     * Gets the 'swiftmailer.email_sender.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener A Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener instance
     */
    protected function getSwiftmailer_EmailSender_ListenerService()
    {
        return $this->services['swiftmailer.email_sender.listener'] = new \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener($this, $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /*
     * Gets the 'swiftmailer.mailer.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_Mailer A Swift_Mailer instance
     */
    protected function getSwiftmailer_Mailer_DefaultService()
    {
        return $this->services['swiftmailer.mailer.default'] = new \Swift_Mailer($this->get('swiftmailer.mailer.default.transport'));
    }

    /*
     * Gets the 'swiftmailer.mailer.default.spool' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_MemorySpool A Swift_MemorySpool instance
     */
    protected function getSwiftmailer_Mailer_Default_SpoolService()
    {
        return $this->services['swiftmailer.mailer.default.spool'] = new \Swift_MemorySpool();
    }

    /*
     * Gets the 'swiftmailer.mailer.default.transport' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_Transport_SpoolTransport A Swift_Transport_SpoolTransport instance
     */
    protected function getSwiftmailer_Mailer_Default_TransportService()
    {
        return $this->services['swiftmailer.mailer.default.transport'] = new \Swift_Transport_SpoolTransport(${($_ = isset($this->services['swiftmailer.mailer.default.transport.eventdispatcher']) ? $this->services['swiftmailer.mailer.default.transport.eventdispatcher'] : $this->getSwiftmailer_Mailer_Default_Transport_EventdispatcherService()) && false ?: '_'}, $this->get('swiftmailer.mailer.default.spool'));
    }

    /*
     * Gets the 'swiftmailer.mailer.default.transport.real' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_Transport_EsmtpTransport A Swift_Transport_EsmtpTransport instance
     */
    protected function getSwiftmailer_Mailer_Default_Transport_RealService()
    {
        $a = new \Swift_Transport_Esmtp_AuthHandler(array(0 => new \Swift_Transport_Esmtp_Auth_CramMd5Authenticator(), 1 => new \Swift_Transport_Esmtp_Auth_LoginAuthenticator(), 2 => new \Swift_Transport_Esmtp_Auth_PlainAuthenticator()));
        $a->setUsername('00b0d8aef795cf18f6aedfa0ea94cc46');
        $a->setPassword('47bd9a0dde54e18013cfa8511656b0a8');
        $a->setAuthMode(NULL);

        $this->services['swiftmailer.mailer.default.transport.real'] = $instance = new \Swift_Transport_EsmtpTransport(new \Swift_Transport_StreamBuffer(new \Swift_StreamFilters_StringReplacementFilterFactory()), array(0 => $a), ${($_ = isset($this->services['swiftmailer.mailer.default.transport.eventdispatcher']) ? $this->services['swiftmailer.mailer.default.transport.eventdispatcher'] : $this->getSwiftmailer_Mailer_Default_Transport_EventdispatcherService()) && false ?: '_'});

        $instance->setHost('in-v3.mailjet.com');
        $instance->setPort(587);
        $instance->setEncryption(NULL);
        $instance->setTimeout(30);
        $instance->setSourceIp(NULL);
        (new \Symfony\Bundle\SwiftmailerBundle\DependencyInjection\SmtpTransportConfigurator(NULL, ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}))->configure($instance);

        return $instance;
    }

    /*
     * Gets the 'templating' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\TwigEngine A Symfony\Bundle\TwigBundle\TwigEngine instance
     */
    protected function getTemplatingService()
    {
        return $this->services['templating'] = new \Symfony\Bundle\TwigBundle\TwigEngine($this->get('twig'), $this->get('templating.name_parser'), ${($_ = isset($this->services['templating.locator']) ? $this->services['templating.locator'] : $this->getTemplating_LocatorService()) && false ?: '_'});
    }

    /*
     * Gets the 'templating.filename_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser A Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser instance
     */
    protected function getTemplating_FilenameParserService()
    {
        return $this->services['templating.filename_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser();
    }

    /*
     * Gets the 'templating.helper.logout_url' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper A Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper instance
     */
    protected function getTemplating_Helper_LogoutUrlService()
    {
        return $this->services['templating.helper.logout_url'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper(${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'});
    }

    /*
     * Gets the 'templating.helper.security' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper A Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper instance
     */
    protected function getTemplating_Helper_SecurityService()
    {
        return $this->services['templating.helper.security'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper($this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /*
     * Gets the 'templating.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader A Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader instance
     */
    protected function getTemplating_LoaderService()
    {
        return $this->services['templating.loader'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader(${($_ = isset($this->services['templating.locator']) ? $this->services['templating.locator'] : $this->getTemplating_LocatorService()) && false ?: '_'});
    }

    /*
     * Gets the 'templating.name_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser A Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser instance
     */
    protected function getTemplating_NameParserService()
    {
        return $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser($this->get('kernel'));
    }

    /*
     * Gets the 'translation.dumper.csv' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\CsvFileDumper A Symfony\Component\Translation\Dumper\CsvFileDumper instance
     */
    protected function getTranslation_Dumper_CsvService()
    {
        return $this->services['translation.dumper.csv'] = new \Symfony\Component\Translation\Dumper\CsvFileDumper();
    }

    /*
     * Gets the 'translation.dumper.ini' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\IniFileDumper A Symfony\Component\Translation\Dumper\IniFileDumper instance
     */
    protected function getTranslation_Dumper_IniService()
    {
        return $this->services['translation.dumper.ini'] = new \Symfony\Component\Translation\Dumper\IniFileDumper();
    }

    /*
     * Gets the 'translation.dumper.json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\JsonFileDumper A Symfony\Component\Translation\Dumper\JsonFileDumper instance
     */
    protected function getTranslation_Dumper_JsonService()
    {
        return $this->services['translation.dumper.json'] = new \Symfony\Component\Translation\Dumper\JsonFileDumper();
    }

    /*
     * Gets the 'translation.dumper.mo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\MoFileDumper A Symfony\Component\Translation\Dumper\MoFileDumper instance
     */
    protected function getTranslation_Dumper_MoService()
    {
        return $this->services['translation.dumper.mo'] = new \Symfony\Component\Translation\Dumper\MoFileDumper();
    }

    /*
     * Gets the 'translation.dumper.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\PhpFileDumper A Symfony\Component\Translation\Dumper\PhpFileDumper instance
     */
    protected function getTranslation_Dumper_PhpService()
    {
        return $this->services['translation.dumper.php'] = new \Symfony\Component\Translation\Dumper\PhpFileDumper();
    }

    /*
     * Gets the 'translation.dumper.po' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\PoFileDumper A Symfony\Component\Translation\Dumper\PoFileDumper instance
     */
    protected function getTranslation_Dumper_PoService()
    {
        return $this->services['translation.dumper.po'] = new \Symfony\Component\Translation\Dumper\PoFileDumper();
    }

    /*
     * Gets the 'translation.dumper.qt' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\QtFileDumper A Symfony\Component\Translation\Dumper\QtFileDumper instance
     */
    protected function getTranslation_Dumper_QtService()
    {
        return $this->services['translation.dumper.qt'] = new \Symfony\Component\Translation\Dumper\QtFileDumper();
    }

    /*
     * Gets the 'translation.dumper.res' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\IcuResFileDumper A Symfony\Component\Translation\Dumper\IcuResFileDumper instance
     */
    protected function getTranslation_Dumper_ResService()
    {
        return $this->services['translation.dumper.res'] = new \Symfony\Component\Translation\Dumper\IcuResFileDumper();
    }

    /*
     * Gets the 'translation.dumper.xliff' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\XliffFileDumper A Symfony\Component\Translation\Dumper\XliffFileDumper instance
     */
    protected function getTranslation_Dumper_XliffService()
    {
        return $this->services['translation.dumper.xliff'] = new \Symfony\Component\Translation\Dumper\XliffFileDumper();
    }

    /*
     * Gets the 'translation.dumper.yml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\YamlFileDumper A Symfony\Component\Translation\Dumper\YamlFileDumper instance
     */
    protected function getTranslation_Dumper_YmlService()
    {
        return $this->services['translation.dumper.yml'] = new \Symfony\Component\Translation\Dumper\YamlFileDumper();
    }

    /*
     * Gets the 'translation.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Extractor\ChainExtractor A Symfony\Component\Translation\Extractor\ChainExtractor instance
     */
    protected function getTranslation_ExtractorService()
    {
        $this->services['translation.extractor'] = $instance = new \Symfony\Component\Translation\Extractor\ChainExtractor();

        $instance->addExtractor('php', $this->get('translation.extractor.php'));
        $instance->addExtractor('twig', $this->get('twig.translation.extractor'));

        return $instance;
    }

    /*
     * Gets the 'translation.extractor.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor A Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor instance
     */
    protected function getTranslation_Extractor_PhpService()
    {
        return $this->services['translation.extractor.php'] = new \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor();
    }

    /*
     * Gets the 'translation.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader A Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader instance
     */
    protected function getTranslation_LoaderService()
    {
        $a = $this->get('translation.loader.xliff');

        $this->services['translation.loader'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader();

        $instance->addLoader('php', $this->get('translation.loader.php'));
        $instance->addLoader('yml', $this->get('translation.loader.yml'));
        $instance->addLoader('xlf', $a);
        $instance->addLoader('xliff', $a);
        $instance->addLoader('po', $this->get('translation.loader.po'));
        $instance->addLoader('mo', $this->get('translation.loader.mo'));
        $instance->addLoader('ts', $this->get('translation.loader.qt'));
        $instance->addLoader('csv', $this->get('translation.loader.csv'));
        $instance->addLoader('res', $this->get('translation.loader.res'));
        $instance->addLoader('dat', $this->get('translation.loader.dat'));
        $instance->addLoader('ini', $this->get('translation.loader.ini'));
        $instance->addLoader('json', $this->get('translation.loader.json'));

        return $instance;
    }

    /*
     * Gets the 'translation.loader.csv' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\CsvFileLoader A Symfony\Component\Translation\Loader\CsvFileLoader instance
     */
    protected function getTranslation_Loader_CsvService()
    {
        return $this->services['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader();
    }

    /*
     * Gets the 'translation.loader.dat' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuDatFileLoader A Symfony\Component\Translation\Loader\IcuDatFileLoader instance
     */
    protected function getTranslation_Loader_DatService()
    {
        return $this->services['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader();
    }

    /*
     * Gets the 'translation.loader.ini' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\IniFileLoader A Symfony\Component\Translation\Loader\IniFileLoader instance
     */
    protected function getTranslation_Loader_IniService()
    {
        return $this->services['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader();
    }

    /*
     * Gets the 'translation.loader.json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\JsonFileLoader A Symfony\Component\Translation\Loader\JsonFileLoader instance
     */
    protected function getTranslation_Loader_JsonService()
    {
        return $this->services['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader();
    }

    /*
     * Gets the 'translation.loader.mo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\MoFileLoader A Symfony\Component\Translation\Loader\MoFileLoader instance
     */
    protected function getTranslation_Loader_MoService()
    {
        return $this->services['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader();
    }

    /*
     * Gets the 'translation.loader.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\PhpFileLoader A Symfony\Component\Translation\Loader\PhpFileLoader instance
     */
    protected function getTranslation_Loader_PhpService()
    {
        return $this->services['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader();
    }

    /*
     * Gets the 'translation.loader.po' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\PoFileLoader A Symfony\Component\Translation\Loader\PoFileLoader instance
     */
    protected function getTranslation_Loader_PoService()
    {
        return $this->services['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader();
    }

    /*
     * Gets the 'translation.loader.qt' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\QtFileLoader A Symfony\Component\Translation\Loader\QtFileLoader instance
     */
    protected function getTranslation_Loader_QtService()
    {
        return $this->services['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader();
    }

    /*
     * Gets the 'translation.loader.res' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuResFileLoader A Symfony\Component\Translation\Loader\IcuResFileLoader instance
     */
    protected function getTranslation_Loader_ResService()
    {
        return $this->services['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader();
    }

    /*
     * Gets the 'translation.loader.xliff' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\XliffFileLoader A Symfony\Component\Translation\Loader\XliffFileLoader instance
     */
    protected function getTranslation_Loader_XliffService()
    {
        return $this->services['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader();
    }

    /*
     * Gets the 'translation.loader.yml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\YamlFileLoader A Symfony\Component\Translation\Loader\YamlFileLoader instance
     */
    protected function getTranslation_Loader_YmlService()
    {
        return $this->services['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader();
    }

    /*
     * Gets the 'translation.writer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Writer\TranslationWriter A Symfony\Component\Translation\Writer\TranslationWriter instance
     */
    protected function getTranslation_WriterService()
    {
        $this->services['translation.writer'] = $instance = new \Symfony\Component\Translation\Writer\TranslationWriter();

        $instance->addDumper('php', $this->get('translation.dumper.php'));
        $instance->addDumper('xlf', $this->get('translation.dumper.xliff'));
        $instance->addDumper('po', $this->get('translation.dumper.po'));
        $instance->addDumper('mo', $this->get('translation.dumper.mo'));
        $instance->addDumper('yml', $this->get('translation.dumper.yml'));
        $instance->addDumper('ts', $this->get('translation.dumper.qt'));
        $instance->addDumper('csv', $this->get('translation.dumper.csv'));
        $instance->addDumper('ini', $this->get('translation.dumper.ini'));
        $instance->addDumper('json', $this->get('translation.dumper.json'));
        $instance->addDumper('res', $this->get('translation.dumper.res'));

        return $instance;
    }

    /*
     * Gets the 'translator.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\Translator A Symfony\Bundle\FrameworkBundle\Translation\Translator instance
     */
    protected function getTranslator_DefaultService()
    {
        $this->services['translator.default'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator($this, new \Symfony\Component\Translation\MessageSelector(), array('translation.loader.php' => array(0 => 'php'), 'translation.loader.yml' => array(0 => 'yml'), 'translation.loader.xliff' => array(0 => 'xlf', 1 => 'xliff'), 'translation.loader.po' => array(0 => 'po'), 'translation.loader.mo' => array(0 => 'mo'), 'translation.loader.qt' => array(0 => 'ts'), 'translation.loader.csv' => array(0 => 'csv'), 'translation.loader.res' => array(0 => 'res'), 'translation.loader.dat' => array(0 => 'dat'), 'translation.loader.ini' => array(0 => 'ini'), 'translation.loader.json' => array(0 => 'json')), array('cache_dir' => (__DIR__.'/translations'), 'debug' => false, 'resource_files' => array('af' => array(0 => '/app/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.af.xlf', 1 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.af.yml'), 'ar' => array(0 => '/app/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ar.xlf', 1 => '/app/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ar.xlf', 2 => '/app/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ar.xlf', 3 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ar.yml', 4 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ar.yml'), 'az' => array(0 => '/app/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.az.xlf', 1 => '/app/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.az.xlf', 2 => '/app/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.az.xlf'), 'bg' => array(0 => '/app/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.bg.xlf', 1 => '/app/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.bg.xlf', 2 => '/app/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.bg.xlf', 3 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.bg.yml', 4 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.bg.yml'), 'ca' => array(0 => '/app/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ca.xlf', 1 => '/app/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ca.xlf', 2 => '/app/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ca.xlf', 3 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ca.yml', 4 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ca.yml'), 'cs' => array(0 => '/app/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cs.xlf', 1 => '/app/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.cs.xlf', 2 => '/app/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.cs.xlf', 3 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.cs.yml', 4 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.cs.yml'), 'cy' => array(0 => '/app/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cy.xlf'), 'da' => array(0 => '/app/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.da.xlf', 1 => '/app/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.da.xlf', 2 => '/app/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.da.xlf', 3 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.da.yml', 4 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.da.yml'), 'de' => array(0 => '/app/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.de.xlf', 1 => '/app/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.de.xlf', 2 => '/app/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.de.xlf', 3 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.de.yml', 4 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.de.yml'), 'el' => array(0 => '/app/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.el.xlf', 1 => '/app/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.el.xlf', 2 => '/app/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.el.xlf', 3 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.el.yml', 4 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.el.yml'), 'en' => array(0 => '/app/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.en.xlf', 1 => '/app/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.en.xlf', 2 => '/app/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.en.xlf', 3 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.en.yml', 4 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.en.yml', 5 => '/app/vendor/oneup/uploader-bundle/Oneup/UploaderBundle/Resources/translations/OneupUploaderBundle.en.yml'), 'es' => array(0 => '/app/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.es.xlf', 1 => '/app/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.es.xlf', 2 => '/app/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.es.xlf', 3 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.es.yml', 4 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.es.yml'), 'et' => array(0 => '/app/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.et.xlf', 1 => '/app/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.et.xlf', 2 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.et.yml'), 'eu' => array(0 => '/app/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.eu.xlf', 1 => '/app/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.eu.xlf', 2 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.eu.yml', 3 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.eu.yml'), 'fa' => array(0 => '/app/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fa.xlf', 1 => '/app/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fa.xlf', 2 => '/app/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.fa.xlf', 3 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.fa.yml', 4 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.fa.yml'), 'fi' => array(0 => '/app/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fi.xlf', 1 => '/app/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fi.xlf', 2 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.fi.yml', 3 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.fi.yml'), 'fr' => array(0 => '/app/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fr.xlf', 1 => '/app/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fr.xlf', 2 => '/app/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.fr.xlf', 3 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.fr.yml', 4 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.fr.yml', 5 => '/app/app/Resources/translations/FOSUserBundle.fr.yml'), 'gl' => array(0 => '/app/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.gl.xlf', 1 => '/app/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.gl.xlf', 2 => '/app/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.gl.xlf'), 'he' => array(0 => '/app/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.he.xlf', 1 => '/app/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.he.xlf', 2 => '/app/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.he.xlf', 3 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.he.yml', 4 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.he.yml'), 'hr' => array(0 => '/app/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hr.xlf', 1 => '/app/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hr.xlf', 2 => '/app/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.hr.xlf', 3 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.hr.yml', 4 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.hr.yml'), 'hu' => array(0 => '/app/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hu.xlf', 1 => '/app/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hu.xlf', 2 => '/app/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.hu.xlf', 3 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.hu.yml', 4 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.hu.yml'), 'hy' => array(0 => '/app/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hy.xlf', 1 => '/app/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hy.xlf'), 'id' => array(0 => '/app/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.id.xlf', 1 => '/app/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.id.xlf', 2 => '/app/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.id.xlf', 3 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.id.yml', 4 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.id.yml'), 'it' => array(0 => '/app/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.it.xlf', 1 => '/app/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.it.xlf', 2 => '/app/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.it.xlf', 3 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.it.yml', 4 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.it.yml'), 'ja' => array(0 => '/app/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ja.xlf', 1 => '/app/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ja.xlf', 2 => '/app/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ja.xlf', 3 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ja.yml', 4 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ja.yml'), 'lb' => array(0 => '/app/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lb.xlf', 1 => '/app/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lb.xlf', 2 => '/app/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.lb.xlf', 3 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.lb.yml'), 'lt' => array(0 => '/app/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lt.xlf', 1 => '/app/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lt.xlf', 2 => '/app/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.lt.xlf', 3 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.lt.yml', 4 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.lt.yml'), 'lv' => array(0 => '/app/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lv.xlf', 1 => '/app/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lv.xlf', 2 => '/app/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.lv.xlf', 3 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.lv.yml', 4 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.lv.yml'), 'mn' => array(0 => '/app/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.mn.xlf', 1 => '/app/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.mn.xlf'), 'nl' => array(0 => '/app/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nl.xlf', 1 => '/app/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.nl.xlf', 2 => '/app/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.nl.xlf', 3 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.nl.yml', 4 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.nl.yml'), 'nn' => array(0 => '/app/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nn.xlf'), 'no' => array(0 => '/app/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.no.xlf', 1 => '/app/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.no.xlf', 2 => '/app/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.no.xlf'), 'pl' => array(0 => '/app/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pl.xlf', 1 => '/app/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pl.xlf', 2 => '/app/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.pl.xlf', 3 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.pl.yml', 4 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.pl.yml'), 'pt' => array(0 => '/app/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt.xlf', 1 => '/app/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt.xlf', 2 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.pt.yml', 3 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.pt.yml'), 'pt_BR' => array(0 => '/app/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt_BR.xlf', 1 => '/app/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt_BR.xlf', 2 => '/app/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.pt_BR.xlf', 3 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.pt_BR.yml', 4 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.pt_BR.yml'), 'ro' => array(0 => '/app/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ro.xlf', 1 => '/app/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ro.xlf', 2 => '/app/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ro.xlf', 3 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ro.yml', 4 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ro.yml'), 'ru' => array(0 => '/app/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ru.xlf', 1 => '/app/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ru.xlf', 2 => '/app/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ru.xlf', 3 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ru.yml', 4 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ru.yml'), 'sk' => array(0 => '/app/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sk.xlf', 1 => '/app/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sk.xlf', 2 => '/app/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sk.xlf', 3 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sk.yml', 4 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sk.yml'), 'sl' => array(0 => '/app/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sl.xlf', 1 => '/app/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sl.xlf', 2 => '/app/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sl.xlf', 3 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sl.yml', 4 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sl.yml'), 'sq' => array(0 => '/app/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sq.xlf'), 'sr_Cyrl' => array(0 => '/app/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Cyrl.xlf', 1 => '/app/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Cyrl.xlf', 2 => '/app/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sr_Cyrl.xlf'), 'sr_Latn' => array(0 => '/app/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Latn.xlf', 1 => '/app/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Latn.xlf', 2 => '/app/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sr_Latn.xlf', 3 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sr_Latn.yml', 4 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sr_Latn.yml'), 'sv' => array(0 => '/app/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sv.xlf', 1 => '/app/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sv.xlf', 2 => '/app/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sv.xlf', 3 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sv.yml', 4 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sv.yml'), 'th' => array(0 => '/app/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.th.xlf', 1 => '/app/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.th.xlf', 2 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.th.yml', 3 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.th.yml'), 'tr' => array(0 => '/app/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.tr.xlf', 1 => '/app/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.tr.xlf', 2 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.tr.yml', 3 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.tr.yml'), 'uk' => array(0 => '/app/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.uk.xlf', 1 => '/app/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.uk.xlf', 2 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.uk.yml', 3 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.uk.yml'), 'vi' => array(0 => '/app/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.vi.xlf', 1 => '/app/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.vi.xlf', 2 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.vi.yml', 3 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.vi.yml'), 'zh_CN' => array(0 => '/app/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_CN.xlf', 1 => '/app/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.zh_CN.xlf', 2 => '/app/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.zh_CN.xlf', 3 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.zh_CN.yml', 4 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.zh_CN.yml'), 'zh_TW' => array(0 => '/app/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_TW.xlf'), 'pt_PT' => array(0 => '/app/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.pt_PT.xlf'), 'ua' => array(0 => '/app/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ua.xlf'), 'ky' => array(0 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ky.yml', 1 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ky.yml'), 'nb' => array(0 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.nb.yml', 1 => '/app/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.nb.yml'))), array());

        $instance->setConfigCacheFactory($this->get('config_cache_factory'));
        $instance->setFallbackLocales(array(0 => 'fr'));

        return $instance;
    }

    /*
     * Gets the 'translator_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\TranslatorListener A Symfony\Component\HttpKernel\EventListener\TranslatorListener instance
     */
    protected function getTranslatorListenerService()
    {
        return $this->services['translator_listener'] = new \Symfony\Component\HttpKernel\EventListener\TranslatorListener($this->get('translator.default'), $this->get('request_stack'));
    }

    /*
     * Gets the 'twig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Twig_Environment A Twig_Environment instance
     */
    protected function getTwigService()
    {
        $a = $this->get('request_stack');

        $b = new \Symfony\Bridge\Twig\AppVariable();
        $b->setEnvironment('prod');
        $b->setDebug(false);
        if ($this->has('security.token_storage')) {
            $b->setTokenStorage($this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }
        if ($this->has('request_stack')) {
            $b->setRequestStack($a);
        }

        $this->services['twig'] = $instance = new \Twig_Environment($this->get('twig.loader'), array('debug' => false, 'strict_variables' => false, 'exception_controller' => 'twig.controller.exception:showAction', 'form_themes' => array(0 => 'form_div_layout.html.twig'), 'autoescape' => 'name', 'cache' => (__DIR__.'/twig'), 'charset' => 'UTF-8', 'paths' => array(), 'date' => array('format' => 'F j, Y H:i', 'interval_format' => '%d days', 'timezone' => NULL), 'number_format' => array('decimals' => 0, 'decimal_point' => '.', 'thousands_separator' => ',')));

        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension(${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension($this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($this->get('translator.default')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension($this->get('assets.packages')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension(${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : $this->getDebug_FileLinkFormatterService()) && false ?: '_'}, '/app/app', 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension($this->get('router')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension($this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE), false));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension($a, ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension(array(0 => $this, 1 => 'twig.form.renderer')));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension(new \Symfony\Bundle\AsseticBundle\Twig\AsseticExtension(${($_ = isset($this->services['assetic.asset_factory']) ? $this->services['assetic.asset_factory'] : $this->getAssetic_AssetFactoryService()) && false ?: '_'}, $this->get('templating.name_parser'), false, array(), array(0 => 'AppBundle', 1 => 'UserBundle'), new \Symfony\Bundle\AsseticBundle\DefaultValueSupplier($this)));
        $instance->addExtension($this->get('knp_paginator.twig.extension.pagination'));
        $instance->addExtension($this->get('oneup_uploader.twig.extension.uploader'));
        $instance->addExtension($this->get('app.twig.extension'));
        $instance->addExtension($this->get('twig.extension.intl'));
        $instance->addGlobal('app', $b);
        $instance->addRuntimeLoader(new \Symfony\Bundle\TwigBundle\ContainerAwareRuntimeLoader($this, array('Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => 'twig.runtime.httpkernel', 'Symfony\\Bridge\\Twig\\Form\\TwigRenderer' => 'twig.form.renderer'), $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        (new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','))->configure($instance);

        return $instance;
    }

    /*
     * Gets the 'twig.controller.exception' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\ExceptionController A Symfony\Bundle\TwigBundle\Controller\ExceptionController instance
     */
    protected function getTwig_Controller_ExceptionService()
    {
        return $this->services['twig.controller.exception'] = new \Symfony\Bundle\TwigBundle\Controller\ExceptionController($this->get('twig'), false);
    }

    /*
     * Gets the 'twig.controller.preview_error' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController A Symfony\Bundle\TwigBundle\Controller\PreviewErrorController instance
     */
    protected function getTwig_Controller_PreviewErrorService()
    {
        return $this->services['twig.controller.preview_error'] = new \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController($this->get('http_kernel'), 'twig.controller.exception:showAction');
    }

    /*
     * Gets the 'twig.exception_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ExceptionListener A Symfony\Component\HttpKernel\EventListener\ExceptionListener instance
     */
    protected function getTwig_ExceptionListenerService()
    {
        return $this->services['twig.exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ExceptionListener('twig.controller.exception:showAction', $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /*
     * Gets the 'twig.extension.intl' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Twig_Extensions_Extension_Intl A Twig_Extensions_Extension_Intl instance
     */
    protected function getTwig_Extension_IntlService()
    {
        return $this->services['twig.extension.intl'] = new \Twig_Extensions_Extension_Intl();
    }

    /*
     * Gets the 'twig.form.renderer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Twig\Form\TwigRenderer A Symfony\Bridge\Twig\Form\TwigRenderer instance
     */
    protected function getTwig_Form_RendererService()
    {
        return $this->services['twig.form.renderer'] = new \Symfony\Bridge\Twig\Form\TwigRenderer(new \Symfony\Bridge\Twig\Form\TwigRendererEngine(array(0 => 'form_div_layout.html.twig'), $this->get('twig')), $this->get('security.csrf.token_manager', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /*
     * Gets the 'twig.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader A Symfony\Bundle\TwigBundle\Loader\FilesystemLoader instance
     */
    protected function getTwig_LoaderService()
    {
        $this->services['twig.loader'] = $instance = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader(${($_ = isset($this->services['templating.locator']) ? $this->services['templating.locator'] : $this->getTemplating_LocatorService()) && false ?: '_'}, $this->get('templating.name_parser'), '/app');

        $instance->addPath('/app/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views', 'Framework');
        $instance->addPath('/app/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views', 'Security');
        $instance->addPath('/app/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views', 'Twig');
        $instance->addPath('/app/vendor/symfony/swiftmailer-bundle/Resources/views', 'Swiftmailer');
        $instance->addPath('/app/vendor/doctrine/doctrine-bundle/Resources/views', 'Doctrine');
        $instance->addPath('/app/src/UserBundle/Resources/views', 'FOSUser');
        $instance->addPath('/app/vendor/friendsofsymfony/user-bundle/Resources/views', 'FOSUser');
        $instance->addPath('/app/vendor/knplabs/knp-paginator-bundle/Resources/views', 'KnpPaginator');
        $instance->addPath('/app/src/AppBundle/Resources/views', 'App');
        $instance->addPath('/app/src/UserBundle/Resources/views', 'User');
        $instance->addPath('/app/app/Resources/views');
        $instance->addPath('/app/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form');

        return $instance;
    }

    /*
     * Gets the 'twig.profile' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Twig_Profiler_Profile A Twig_Profiler_Profile instance
     */
    protected function getTwig_ProfileService()
    {
        return $this->services['twig.profile'] = new \Twig_Profiler_Profile();
    }

    /*
     * Gets the 'twig.runtime.httpkernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Twig\Extension\HttpKernelRuntime A Symfony\Bridge\Twig\Extension\HttpKernelRuntime instance
     */
    protected function getTwig_Runtime_HttpkernelService()
    {
        return $this->services['twig.runtime.httpkernel'] = new \Symfony\Bridge\Twig\Extension\HttpKernelRuntime($this->get('fragment.handler'));
    }

    /*
     * Gets the 'twig.translation.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Twig\Translation\TwigExtractor A Symfony\Bridge\Twig\Translation\TwigExtractor instance
     */
    protected function getTwig_Translation_ExtractorService()
    {
        return $this->services['twig.translation.extractor'] = new \Symfony\Bridge\Twig\Translation\TwigExtractor($this->get('twig'));
    }

    /*
     * Gets the 'uri_signer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\UriSigner A Symfony\Component\HttpKernel\UriSigner instance
     */
    protected function getUriSignerService()
    {
        return $this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('9baf686cb11b70fa0848a2e37886d2395f8c46c9');
    }

    /*
     * Gets the 'validate_request_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener A Symfony\Component\HttpKernel\EventListener\ValidateRequestListener instance
     */
    protected function getValidateRequestListenerService()
    {
        return $this->services['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener();
    }

    /*
     * Gets the 'validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\Validator\ValidatorInterface A Symfony\Component\Validator\Validator\ValidatorInterface instance
     */
    protected function getValidatorService()
    {
        return $this->services['validator'] = $this->get('validator.builder')->getValidator();
    }

    /*
     * Gets the 'validator.builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\ValidatorBuilderInterface A Symfony\Component\Validator\ValidatorBuilderInterface instance
     */
    protected function getValidator_BuilderService()
    {
        $this->services['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

        $instance->setConstraintValidatorFactory(new \Symfony\Bundle\FrameworkBundle\Validator\ConstraintValidatorFactory($this, array('validator.expression' => 'validator.expression', 'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => 'validator.expression', 'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => 'validator.email', 'security.validator.user_password' => 'security.validator.user_password', 'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => 'security.validator.user_password', 'doctrine.orm.validator.unique' => 'doctrine.orm.validator.unique', 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => 'doctrine.orm.validator.unique')));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setTranslationDomain('validators');
        $instance->addXmlMappings(array(0 => '/app/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/config/validation.xml', 1 => '/app/vendor/friendsofsymfony/user-bundle/Resources/config/validation.xml'));
        $instance->enableAnnotationMapping($this->get('annotation_reader'));
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->setMetadataCache(new \Symfony\Component\Validator\Mapping\Cache\Psr6Cache(\Symfony\Component\Cache\Adapter\PhpArrayAdapter::create((__DIR__.'/validation.php'), ${($_ = isset($this->services['cache.validator']) ? $this->services['cache.validator'] : $this->getCache_ValidatorService()) && false ?: '_'})));
        $instance->addObjectInitializers(array(0 => $this->get('doctrine.orm.validator_initializer'), 1 => new \FOS\UserBundle\Validator\Initializer(${($_ = isset($this->services['fos_user.util.canonical_fields_updater']) ? $this->services['fos_user.util.canonical_fields_updater'] : $this->getFosUser_Util_CanonicalFieldsUpdaterService()) && false ?: '_'})));
        $instance->addXmlMapping('/app/vendor/friendsofsymfony/user-bundle/DependencyInjection/Compiler/../../Resources/config/storage-validation/orm.xml');

        return $instance;
    }

    /*
     * Gets the 'validator.email' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\Constraints\EmailValidator A Symfony\Component\Validator\Constraints\EmailValidator instance
     */
    protected function getValidator_EmailService()
    {
        return $this->services['validator.email'] = new \Symfony\Component\Validator\Constraints\EmailValidator(false);
    }

    /*
     * Gets the 'validator.expression' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\Constraints\ExpressionValidator A Symfony\Component\Validator\Constraints\ExpressionValidator instance
     */
    protected function getValidator_ExpressionService()
    {
        return $this->services['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator();
    }

    /*
     * Gets the 'annotations.reader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader A Doctrine\Common\Annotations\AnnotationReader instance
     */
    protected function getAnnotations_ReaderService()
    {
        return $this->services['annotations.reader'] = new \Doctrine\Common\Annotations\AnnotationReader();
    }

    /*
     * Gets the 'assetic.asset_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\AsseticBundle\Factory\AssetFactory A Symfony\Bundle\AsseticBundle\Factory\AssetFactory instance
     */
    protected function getAssetic_AssetFactoryService()
    {
        return $this->services['assetic.asset_factory'] = new \Symfony\Bundle\AsseticBundle\Factory\AssetFactory($this->get('kernel'), $this, $this->getParameterBag(), '/app/app/../web', false);
    }

    /*
     * Gets the 'cache.annotations' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface A Symfony\Component\Cache\Adapter\AdapterInterface instance
     */
    protected function getCache_AnnotationsService()
    {
        return $this->services['cache.annotations'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('kSxNZbwlGr', 0, 'Z67oXFu5fRVwan9fAj7HxN', (__DIR__.'/pools'), $this->get('monolog.logger.cache'));
    }

    /*
     * Gets the 'cache.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface A Symfony\Component\Cache\Adapter\AdapterInterface instance
     */
    protected function getCache_ValidatorService()
    {
        return $this->services['cache.validator'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('LQne0j5uWB', 0, 'Z67oXFu5fRVwan9fAj7HxN', (__DIR__.'/pools'), $this->get('monolog.logger.cache', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /*
     * Gets the 'controller_name_converter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser A Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser instance
     */
    protected function getControllerNameConverterService()
    {
        return $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser($this->get('kernel'));
    }

    /*
     * Gets the 'debug.file_link_formatter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\HttpKernel\Debug\FileLinkFormatter A Symfony\Component\HttpKernel\Debug\FileLinkFormatter instance
     */
    protected function getDebug_FileLinkFormatterService()
    {
        return $this->services['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL);
    }

    /*
     * Gets the 'form.server_params' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Form\Util\ServerParams A Symfony\Component\Form\Util\ServerParams instance
     */
    protected function getForm_ServerParamsService()
    {
        return $this->services['form.server_params'] = new \Symfony\Component\Form\Util\ServerParams($this->get('request_stack'));
    }

    /*
     * Gets the 'fos_user.user_provider.username_email' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \FOS\UserBundle\Security\EmailUserProvider A FOS\UserBundle\Security\EmailUserProvider instance
     */
    protected function getFosUser_UserProvider_UsernameEmailService()
    {
        return $this->services['fos_user.user_provider.username_email'] = new \FOS\UserBundle\Security\EmailUserProvider($this->get('fos_user.user_manager'));
    }

    /*
     * Gets the 'fos_user.util.canonical_fields_updater' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \FOS\UserBundle\Util\CanonicalFieldsUpdater A FOS\UserBundle\Util\CanonicalFieldsUpdater instance
     */
    protected function getFosUser_Util_CanonicalFieldsUpdaterService()
    {
        $a = $this->get('fos_user.util.email_canonicalizer');

        return $this->services['fos_user.util.canonical_fields_updater'] = new \FOS\UserBundle\Util\CanonicalFieldsUpdater($a, $a);
    }

    /*
     * Gets the 'fos_user.util.password_updater' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \FOS\UserBundle\Util\PasswordUpdater A FOS\UserBundle\Util\PasswordUpdater instance
     */
    protected function getFosUser_Util_PasswordUpdaterService()
    {
        return $this->services['fos_user.util.password_updater'] = new \FOS\UserBundle\Util\PasswordUpdater($this->get('security.encoder_factory'));
    }

    /*
     * Gets the 'monolog.processor.psr_log_message' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Monolog\Processor\PsrLogMessageProcessor A Monolog\Processor\PsrLogMessageProcessor instance
     */
    protected function getMonolog_Processor_PsrLogMessageService()
    {
        return $this->services['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor();
    }

    /*
     * Gets the 'oneup_uploader.error_handler.blueimp' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Oneup\UploaderBundle\Uploader\ErrorHandler\BlueimpErrorHandler A Oneup\UploaderBundle\Uploader\ErrorHandler\BlueimpErrorHandler instance
     */
    protected function getOneupUploader_ErrorHandler_BlueimpService()
    {
        return $this->services['oneup_uploader.error_handler.blueimp'] = new \Oneup\UploaderBundle\Uploader\ErrorHandler\BlueimpErrorHandler();
    }

    /*
     * Gets the 'router.request_context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Routing\RequestContext A Symfony\Component\Routing\RequestContext instance
     */
    protected function getRouter_RequestContextService()
    {
        return $this->services['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /*
     * Gets the 'security.access.decision_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AccessDecisionManager A Symfony\Component\Security\Core\Authorization\AccessDecisionManager instance
     */
    protected function getSecurity_Access_DecisionManagerService()
    {
        $a = ${($_ = isset($this->services['security.role_hierarchy']) ? $this->services['security.role_hierarchy'] : $this->getSecurity_RoleHierarchyService()) && false ?: '_'};
        $b = ${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : $this->getSecurity_Authentication_TrustResolverService()) && false ?: '_'};

        $this->services['security.access.decision_manager'] = $instance = new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(array(), 'affirmative', false, true);

        $instance->setVoters(array(0 => new \Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter($a), 1 => new \Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter(new \Symfony\Component\Security\Core\Authorization\ExpressionLanguage(), $b, $a), 2 => new \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter($b)));

        return $instance;
    }

    /*
     * Gets the 'security.authentication.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager A Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager instance
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $this->services['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(array(0 => new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider(${($_ = isset($this->services['fos_user.user_provider.username_email']) ? $this->services['fos_user.user_provider.username_email'] : $this->getFosUser_UserProvider_UsernameEmailService()) && false ?: '_'}, ${($_ = isset($this->services['security.user_checker']) ? $this->services['security.user_checker'] : $this->getSecurity_UserCheckerService()) && false ?: '_'}, 'main', $this->get('security.encoder_factory'), true), 1 => new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider('596f5a0abec346.84067364')), true);

        $instance->setEventDispatcher($this->get('event_dispatcher'));

        return $instance;
    }

    /*
     * Gets the 'security.authentication.session_strategy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy A Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy instance
     */
    protected function getSecurity_Authentication_SessionStrategyService()
    {
        return $this->services['security.authentication.session_strategy'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate');
    }

    /*
     * Gets the 'security.authentication.trust_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver A Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver instance
     */
    protected function getSecurity_Authentication_TrustResolverService()
    {
        return $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken');
    }

    /*
     * Gets the 'security.logout_url_generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator A Symfony\Component\Security\Http\Logout\LogoutUrlGenerator instance
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        $this->services['security.logout_url_generator'] = $instance = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator($this->get('request_stack', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->registerListener('main', '/logout', 'logout', '_csrf_token', NULL);

        return $instance;
    }

    /*
     * Gets the 'security.role_hierarchy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Role\RoleHierarchy A Symfony\Component\Security\Core\Role\RoleHierarchy instance
     */
    protected function getSecurity_RoleHierarchyService()
    {
        return $this->services['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy(array('ROLE_USER' => array(0 => 'ROLE_USER'), 'ROLE_VIEWER' => array(0 => 'ROLE_USER'), 'ROLE_BTP' => array(0 => 'ROLE_USER'), 'ROLE_OF' => array(0 => 'ROLE_VIEWER'), 'ROLE_ADMIN' => array(0 => 'ROLE_OF', 1 => 'ROLE_ALLOWED_TO_SWITCH'), 'ROLE_SUPER_ADMIN' => array(0 => 'ROLE_ADMIN')));
    }

    /*
     * Gets the 'security.user_checker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\User\UserChecker A Symfony\Component\Security\Core\User\UserChecker instance
     */
    protected function getSecurity_UserCheckerService()
    {
        return $this->services['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker();
    }

    /*
     * Gets the 'session.storage.metadata_bag' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag A Symfony\Component\HttpFoundation\Session\Storage\MetadataBag instance
     */
    protected function getSession_Storage_MetadataBagService()
    {
        return $this->services['session.storage.metadata_bag'] = new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', '0');
    }

    /*
     * Gets the 'swiftmailer.mailer.default.transport.eventdispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Swift_Events_SimpleEventDispatcher A Swift_Events_SimpleEventDispatcher instance
     */
    protected function getSwiftmailer_Mailer_Default_Transport_EventdispatcherService()
    {
        return $this->services['swiftmailer.mailer.default.transport.eventdispatcher'] = new \Swift_Events_SimpleEventDispatcher();
    }

    /*
     * Gets the 'templating.locator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator A Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator instance
     */
    protected function getTemplating_LocatorService()
    {
        return $this->services['templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator($this->get('file_locator'), __DIR__);
    }

    /*
     * {@inheritdoc}
     */
    public function getParameter($name)
    {
        $name = strtolower($name);

        if (!(isset($this->parameters[$name]) || array_key_exists($name, $this->parameters) || isset($this->loadedDynamicParameters[$name]))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    /*
     * {@inheritdoc}
     */
    public function hasParameter($name)
    {
        $name = strtolower($name);

        return isset($this->parameters[$name]) || array_key_exists($name, $this->parameters) || isset($this->loadedDynamicParameters[$name]);
    }

    /*
     * {@inheritdoc}
     */
    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    /*
     * {@inheritdoc}
     */
    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = array(
        'kernel.logs_dir' => false,
    );
    private $dynamicParameters = array();

    /*
     * Computes a dynamic parameter.
     *
     * @param string The name of the dynamic parameter to load
     *
     * @return mixed The value of the dynamic parameter
     *
     * @throws InvalidArgumentException When the dynamic parameter does not exist
     */
    private function getDynamicParameter($name)
    {
        switch ($name) {
            case 'kernel.logs_dir': $value = ($this->targetDirs[2].'/logs'); break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
        }
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    /*
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'kernel.root_dir' => '/app/app',
            'kernel.environment' => 'prod',
            'kernel.debug' => false,
            'kernel.name' => 'app',
            'kernel.cache_dir' => __DIR__,
            'kernel.bundles' => array(
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'FOSUserBundle' => 'FOS\\UserBundle\\FOSUserBundle',
                'KnpSnappyBundle' => 'Knp\\Bundle\\SnappyBundle\\KnpSnappyBundle',
                'AsseticBundle' => 'Symfony\\Bundle\\AsseticBundle\\AsseticBundle',
                'StofDoctrineExtensionsBundle' => 'Stof\\DoctrineExtensionsBundle\\StofDoctrineExtensionsBundle',
                'KnpPaginatorBundle' => 'Knp\\Bundle\\PaginatorBundle\\KnpPaginatorBundle',
                'OneupUploaderBundle' => 'Oneup\\UploaderBundle\\OneupUploaderBundle',
                'AppBundle' => 'AppBundle\\AppBundle',
                'UserBundle' => 'UserBundle\\UserBundle',
            ),
            'kernel.bundles_metadata' => array(
                'FrameworkBundle' => array(
                    'parent' => NULL,
                    'path' => '/app/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle',
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ),
                'SecurityBundle' => array(
                    'parent' => NULL,
                    'path' => '/app/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle',
                    'namespace' => 'Symfony\\Bundle\\SecurityBundle',
                ),
                'TwigBundle' => array(
                    'parent' => NULL,
                    'path' => '/app/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle',
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ),
                'MonologBundle' => array(
                    'parent' => NULL,
                    'path' => '/app/vendor/symfony/monolog-bundle',
                    'namespace' => 'Symfony\\Bundle\\MonologBundle',
                ),
                'SwiftmailerBundle' => array(
                    'parent' => NULL,
                    'path' => '/app/vendor/symfony/swiftmailer-bundle',
                    'namespace' => 'Symfony\\Bundle\\SwiftmailerBundle',
                ),
                'DoctrineBundle' => array(
                    'parent' => NULL,
                    'path' => '/app/vendor/doctrine/doctrine-bundle',
                    'namespace' => 'Doctrine\\Bundle\\DoctrineBundle',
                ),
                'SensioFrameworkExtraBundle' => array(
                    'parent' => NULL,
                    'path' => '/app/vendor/sensio/framework-extra-bundle',
                    'namespace' => 'Sensio\\Bundle\\FrameworkExtraBundle',
                ),
                'FOSUserBundle' => array(
                    'parent' => NULL,
                    'path' => '/app/vendor/friendsofsymfony/user-bundle',
                    'namespace' => 'FOS\\UserBundle',
                ),
                'KnpSnappyBundle' => array(
                    'parent' => NULL,
                    'path' => '/app/vendor/knplabs/knp-snappy-bundle',
                    'namespace' => 'Knp\\Bundle\\SnappyBundle',
                ),
                'AsseticBundle' => array(
                    'parent' => NULL,
                    'path' => '/app/vendor/symfony/assetic-bundle',
                    'namespace' => 'Symfony\\Bundle\\AsseticBundle',
                ),
                'StofDoctrineExtensionsBundle' => array(
                    'parent' => NULL,
                    'path' => '/app/vendor/stof/doctrine-extensions-bundle',
                    'namespace' => 'Stof\\DoctrineExtensionsBundle',
                ),
                'KnpPaginatorBundle' => array(
                    'parent' => NULL,
                    'path' => '/app/vendor/knplabs/knp-paginator-bundle',
                    'namespace' => 'Knp\\Bundle\\PaginatorBundle',
                ),
                'OneupUploaderBundle' => array(
                    'parent' => NULL,
                    'path' => '/app/vendor/oneup/uploader-bundle/Oneup/UploaderBundle',
                    'namespace' => 'Oneup\\UploaderBundle',
                ),
                'AppBundle' => array(
                    'parent' => NULL,
                    'path' => '/app/src/AppBundle',
                    'namespace' => 'AppBundle',
                ),
                'UserBundle' => array(
                    'parent' => 'FOSUserBundle',
                    'path' => '/app/src/UserBundle',
                    'namespace' => 'UserBundle',
                ),
            ),
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'appProdProjectContainer',
            'database_host' => 'dev_db_btp',
            'database_port' => NULL,
            'database_name' => 'egfbtp_prod',
            'database_user' => 'root',
            'database_password' => 'root',
            'mailer_transport' => 'smtp',
            'mailer_host' => 'in-v3.mailjet.com',
            'mailer_user' => '00b0d8aef795cf18f6aedfa0ea94cc46',
            'mailer_password' => '47bd9a0dde54e18013cfa8511656b0a8',
            'mailer_port' => 587,
            'secret' => '9baf686cb11b70fa0848a2e37886d2395f8c46c9',
            'locale' => 'fr',
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.path' => '/_fragment',
            'kernel.secret' => '9baf686cb11b70fa0848a2e37886d2395f8c46c9',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => array(

            ),
            'kernel.trusted_proxies' => array(

            ),
            'kernel.default_locale' => 'fr',
            'templating.helper.code.file_link_format' => NULL,
            'debug.file_link_format' => NULL,
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.options' => array(
                'cookie_httponly' => true,
                'gc_probability' => 1,
            ),
            'session.save_path' => '/app/app/../var/sessions/prod',
            'session.metadata.update_threshold' => '0',
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'templating.loader.cache.path' => NULL,
            'templating.engines' => array(
                0 => 'twig',
            ),
            'validator.mapping.cache.prefix' => '',
            'validator.mapping.cache.file' => (__DIR__.'/validation.php'),
            'validator.translation_domain' => 'validators',
            'translator.logging' => false,
            'data_collector.templates' => array(

            ),
            'debug.error_handler.throw_at' => 0,
            'router.options.generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper',
            'router.options.matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper',
            'router.options.matcher.cache_class' => 'appProdProjectContainerUrlMatcher',
            'router.options.generator.cache_class' => 'appProdProjectContainerUrlGenerator',
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => '/app/app/config/routing.yml',
            'router.cache_class_prefix' => 'appProdProjectContainer',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'security.authentication.trust_resolver.anonymous_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken',
            'security.authentication.trust_resolver.rememberme_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken',
            'security.role_hierarchy.roles' => array(
                'ROLE_USER' => array(
                    0 => 'ROLE_USER',
                ),
                'ROLE_VIEWER' => array(
                    0 => 'ROLE_USER',
                ),
                'ROLE_BTP' => array(
                    0 => 'ROLE_USER',
                ),
                'ROLE_OF' => array(
                    0 => 'ROLE_VIEWER',
                ),
                'ROLE_ADMIN' => array(
                    0 => 'ROLE_OF',
                    1 => 'ROLE_ALLOWED_TO_SWITCH',
                ),
                'ROLE_SUPER_ADMIN' => array(
                    0 => 'ROLE_ADMIN',
                ),
            ),
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'twig.exception_listener.controller' => 'twig.controller.exception:showAction',
            'twig.form.resources' => array(
                0 => 'form_div_layout.html.twig',
            ),
            'monolog.use_microseconds' => true,
            'monolog.swift_mailer.handlers' => array(

            ),
            'monolog.handlers_to_channels' => array(
                'monolog.handler.console' => NULL,
                'monolog.handler.main' => NULL,
            ),
            'swiftmailer.class' => 'Swift_Mailer',
            'swiftmailer.transport.sendmail.class' => 'Swift_Transport_SendmailTransport',
            'swiftmailer.transport.mail.class' => 'Swift_Transport_MailTransport',
            'swiftmailer.transport.failover.class' => 'Swift_Transport_FailoverTransport',
            'swiftmailer.plugin.redirecting.class' => 'Swift_Plugins_RedirectingPlugin',
            'swiftmailer.plugin.impersonate.class' => 'Swift_Plugins_ImpersonatePlugin',
            'swiftmailer.plugin.messagelogger.class' => 'Swift_Plugins_MessageLogger',
            'swiftmailer.plugin.antiflood.class' => 'Swift_Plugins_AntiFloodPlugin',
            'swiftmailer.transport.smtp.class' => 'Swift_Transport_EsmtpTransport',
            'swiftmailer.plugin.blackhole.class' => 'Swift_Plugins_BlackholePlugin',
            'swiftmailer.spool.file.class' => 'Swift_FileSpool',
            'swiftmailer.spool.memory.class' => 'Swift_MemorySpool',
            'swiftmailer.email_sender.listener.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener',
            'swiftmailer.data_collector.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\DataCollector\\MessageDataCollector',
            'swiftmailer.mailer.default.transport.name' => 'smtp',
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.mailer.default.transport.smtp.encryption' => NULL,
            'swiftmailer.mailer.default.transport.smtp.port' => 587,
            'swiftmailer.mailer.default.transport.smtp.host' => 'in-v3.mailjet.com',
            'swiftmailer.mailer.default.transport.smtp.username' => '00b0d8aef795cf18f6aedfa0ea94cc46',
            'swiftmailer.mailer.default.transport.smtp.password' => '47bd9a0dde54e18013cfa8511656b0a8',
            'swiftmailer.mailer.default.transport.smtp.auth_mode' => NULL,
            'swiftmailer.mailer.default.transport.smtp.timeout' => 30,
            'swiftmailer.mailer.default.transport.smtp.source_ip' => NULL,
            'swiftmailer.mailer.default.transport.smtp.local_domain' => NULL,
            'swiftmailer.spool.default.memory.path' => (__DIR__.'/swiftmailer/spool/default'),
            'swiftmailer.mailer.default.spool.enabled' => true,
            'swiftmailer.mailer.default.plugin.impersonate' => NULL,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.spool.enabled' => true,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => array(
                'default' => 'swiftmailer.mailer.default',
            ),
            'swiftmailer.default_mailer' => 'default',
            'doctrine_cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine_cache.apcu.class' => 'Doctrine\\Common\\Cache\\ApcuCache',
            'doctrine_cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine_cache.chain.class' => 'Doctrine\\Common\\Cache\\ChainCache',
            'doctrine_cache.couchbase.class' => 'Doctrine\\Common\\Cache\\CouchbaseCache',
            'doctrine_cache.couchbase.connection.class' => 'Couchbase',
            'doctrine_cache.couchbase.hostnames' => 'localhost:8091',
            'doctrine_cache.file_system.class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
            'doctrine_cache.php_file.class' => 'Doctrine\\Common\\Cache\\PhpFileCache',
            'doctrine_cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine_cache.memcache.connection.class' => 'Memcache',
            'doctrine_cache.memcache.host' => 'localhost',
            'doctrine_cache.memcache.port' => 11211,
            'doctrine_cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine_cache.memcached.connection.class' => 'Memcached',
            'doctrine_cache.memcached.host' => 'localhost',
            'doctrine_cache.memcached.port' => 11211,
            'doctrine_cache.mongodb.class' => 'Doctrine\\Common\\Cache\\MongoDBCache',
            'doctrine_cache.mongodb.collection.class' => 'MongoCollection',
            'doctrine_cache.mongodb.connection.class' => 'MongoClient',
            'doctrine_cache.mongodb.server' => 'localhost:27017',
            'doctrine_cache.predis.client.class' => 'Predis\\Client',
            'doctrine_cache.predis.scheme' => 'tcp',
            'doctrine_cache.predis.host' => 'localhost',
            'doctrine_cache.predis.port' => 6379,
            'doctrine_cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine_cache.redis.connection.class' => 'Redis',
            'doctrine_cache.redis.host' => 'localhost',
            'doctrine_cache.redis.port' => 6379,
            'doctrine_cache.riak.class' => 'Doctrine\\Common\\Cache\\RiakCache',
            'doctrine_cache.riak.bucket.class' => 'Riak\\Bucket',
            'doctrine_cache.riak.connection.class' => 'Riak\\Connection',
            'doctrine_cache.riak.bucket_property_list.class' => 'Riak\\BucketPropertyList',
            'doctrine_cache.riak.host' => 'localhost',
            'doctrine_cache.riak.port' => 8087,
            'doctrine_cache.sqlite3.class' => 'Doctrine\\Common\\Cache\\SQLite3Cache',
            'doctrine_cache.sqlite3.connection.class' => 'SQLite3',
            'doctrine_cache.void.class' => 'Doctrine\\Common\\Cache\\VoidCache',
            'doctrine_cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine_cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine_cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine_cache.security.acl.cache.class' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\Acl\\Model\\AclCache',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => array(
                'default' => 'doctrine.orm.default_entity_manager',
            ),
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => array(

            ),
            'doctrine.connections' => array(
                'default' => 'doctrine.dbal.default_connection',
            ),
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerAwareEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => false,
            'doctrine.orm.proxy_dir' => (__DIR__.'/doctrine/orm/Proxies'),
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'sensio_framework_extra.view.guesser.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Templating\\TemplateGuesser',
            'sensio_framework_extra.controller.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener',
            'sensio_framework_extra.routing.loader.annot_dir.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationDirectoryLoader',
            'sensio_framework_extra.routing.loader.annot_file.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationFileLoader',
            'sensio_framework_extra.routing.loader.annot_class.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Routing\\AnnotatedRouteControllerLoader',
            'sensio_framework_extra.converter.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener',
            'sensio_framework_extra.converter.manager.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\ParamConverterManager',
            'sensio_framework_extra.converter.doctrine.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DoctrineParamConverter',
            'sensio_framework_extra.converter.datetime.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DateTimeParamConverter',
            'sensio_framework_extra.view.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener',
            'fos_user.backend_type_orm' => true,
            'fos_user.security.interactive_login_listener.class' => 'FOS\\UserBundle\\EventListener\\LastLoginListener',
            'fos_user.security.login_manager.class' => 'FOS\\UserBundle\\Security\\LoginManager',
            'fos_user.resetting.email.template' => '@FOSUser/Resetting/email.txt.twig',
            'fos_user.registration.confirmation.template' => '@FOSUser/Registration/email.txt.twig',
            'fos_user.storage' => 'orm',
            'fos_user.firewall_name' => 'main',
            'fos_user.model_manager_name' => NULL,
            'fos_user.model.user.class' => 'UserBundle\\Entity\\User',
            'fos_user.profile.form.type' => 'FOS\\UserBundle\\Form\\Type\\ProfileFormType',
            'fos_user.profile.form.name' => 'fos_user_profile_form',
            'fos_user.profile.form.validation_groups' => array(
                0 => 'Profile',
                1 => 'Default',
            ),
            'fos_user.registration.confirmation.from_email' => array(
                'contact@passeport-securite-interim-btp.fr' => 'Passeport Securite Interim BTP',
            ),
            'fos_user.registration.confirmation.enabled' => true,
            'fos_user.registration.form.type' => 'UserBundle\\Form\\RegistrationType',
            'fos_user.registration.form.name' => 'fos_user_registration_form',
            'fos_user.registration.form.validation_groups' => array(
                0 => 'Registration',
                1 => 'Default',
            ),
            'fos_user.change_password.form.type' => 'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType',
            'fos_user.change_password.form.name' => 'fos_user_change_password_form',
            'fos_user.change_password.form.validation_groups' => array(
                0 => 'ChangePassword',
                1 => 'Default',
            ),
            'fos_user.resetting.email.from_email' => array(
                'contact@passeport-securite-interim-btp.fr' => 'Passeport Securite Interim BTP',
            ),
            'fos_user.resetting.retry_ttl' => 7200,
            'fos_user.resetting.token_ttl' => 86400,
            'fos_user.resetting.form.type' => 'FOS\\UserBundle\\Form\\Type\\ResettingFormType',
            'fos_user.resetting.form.name' => 'fos_user_resetting_form',
            'fos_user.resetting.form.validation_groups' => array(
                0 => 'ResetPassword',
                1 => 'Default',
            ),
            'knp_snappy.pdf.internal_generator.class' => 'Knp\\Snappy\\Pdf',
            'knp_snappy.pdf.class' => 'Knp\\Bundle\\SnappyBundle\\Snappy\\LoggableGenerator',
            'knp_snappy.pdf.binary' => '/app/app/../vendor/h4cc/wkhtmltopdf-amd64/bin/wkhtmltopdf-amd64',
            'knp_snappy.pdf.options' => array(
                'viewport-size' => '‘1024x768’',
                'page-size' => 'A4',
            ),
            'knp_snappy.pdf.env' => array(

            ),
            'knp_snappy.image.internal_generator.class' => 'Knp\\Snappy\\Image',
            'knp_snappy.image.class' => 'Knp\\Bundle\\SnappyBundle\\Snappy\\LoggableGenerator',
            'knp_snappy.image.binary' => 'wkhtmltoimage',
            'knp_snappy.image.options' => array(

            ),
            'knp_snappy.image.env' => array(

            ),
            'assetic.asset_factory.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\AssetFactory',
            'assetic.asset_manager.class' => 'Assetic\\Factory\\LazyAssetManager',
            'assetic.asset_manager_cache_warmer.class' => 'Symfony\\Bundle\\AsseticBundle\\CacheWarmer\\AssetManagerCacheWarmer',
            'assetic.cached_formula_loader.class' => 'Assetic\\Factory\\Loader\\CachedFormulaLoader',
            'assetic.config_cache.class' => 'Assetic\\Cache\\ConfigCache',
            'assetic.config_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\ConfigurationLoader',
            'assetic.config_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\ConfigurationResource',
            'assetic.coalescing_directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\CoalescingDirectoryResource',
            'assetic.directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\DirectoryResource',
            'assetic.filter_manager.class' => 'Symfony\\Bundle\\AsseticBundle\\FilterManager',
            'assetic.worker.ensure_filter.class' => 'Assetic\\Factory\\Worker\\EnsureFilterWorker',
            'assetic.worker.cache_busting.class' => 'Assetic\\Factory\\Worker\\CacheBustingWorker',
            'assetic.value_supplier.class' => 'Symfony\\Bundle\\AsseticBundle\\DefaultValueSupplier',
            'assetic.node.paths' => array(

            ),
            'assetic.cache_dir' => (__DIR__.'/assetic'),
            'assetic.bundles' => array(
                0 => 'AppBundle',
                1 => 'UserBundle',
            ),
            'assetic.twig_extension.class' => 'Symfony\\Bundle\\AsseticBundle\\Twig\\AsseticExtension',
            'assetic.twig_formula_loader.class' => 'Assetic\\Extension\\Twig\\TwigFormulaLoader',
            'assetic.helper.dynamic.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\DynamicAsseticHelper',
            'assetic.helper.static.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\StaticAsseticHelper',
            'assetic.php_formula_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\AsseticHelperFormulaLoader',
            'assetic.debug' => false,
            'assetic.use_controller' => false,
            'assetic.enable_profiler' => false,
            'assetic.read_from' => '/app/app/../web',
            'assetic.write_to' => '/app/app/../web',
            'assetic.variables' => array(

            ),
            'assetic.java.bin' => '/usr/bin/java',
            'assetic.node.bin' => '/usr/bin/node',
            'assetic.ruby.bin' => '/usr/bin/ruby',
            'assetic.sass.bin' => '/usr/bin/sass',
            'assetic.reactjsx.bin' => '/usr/bin/jsx',
            'assetic.filter.cssrewrite.class' => 'Assetic\\Filter\\CssRewriteFilter',
            'assetic.twig_extension.functions' => array(

            ),
            'stof_doctrine_extensions.event_listener.locale.class' => 'Stof\\DoctrineExtensionsBundle\\EventListener\\LocaleListener',
            'stof_doctrine_extensions.event_listener.logger.class' => 'Stof\\DoctrineExtensionsBundle\\EventListener\\LoggerListener',
            'stof_doctrine_extensions.event_listener.blame.class' => 'Stof\\DoctrineExtensionsBundle\\EventListener\\BlameListener',
            'stof_doctrine_extensions.uploadable.manager.class' => 'Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadableManager',
            'stof_doctrine_extensions.uploadable.mime_type_guesser.class' => 'Stof\\DoctrineExtensionsBundle\\Uploadable\\MimeTypeGuesserAdapter',
            'stof_doctrine_extensions.uploadable.default_file_info.class' => 'Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadedFileInfo',
            'stof_doctrine_extensions.default_locale' => 'en',
            'stof_doctrine_extensions.default_file_path' => NULL,
            'stof_doctrine_extensions.translation_fallback' => false,
            'stof_doctrine_extensions.persist_default_translation' => false,
            'stof_doctrine_extensions.skip_translation_on_load' => false,
            'stof_doctrine_extensions.uploadable.validate_writable_directory' => true,
            'stof_doctrine_extensions.listener.translatable.class' => 'Gedmo\\Translatable\\TranslatableListener',
            'stof_doctrine_extensions.listener.timestampable.class' => 'Gedmo\\Timestampable\\TimestampableListener',
            'stof_doctrine_extensions.listener.blameable.class' => 'Gedmo\\Blameable\\BlameableListener',
            'stof_doctrine_extensions.listener.sluggable.class' => 'Gedmo\\Sluggable\\SluggableListener',
            'stof_doctrine_extensions.listener.tree.class' => 'Gedmo\\Tree\\TreeListener',
            'stof_doctrine_extensions.listener.loggable.class' => 'Gedmo\\Loggable\\LoggableListener',
            'stof_doctrine_extensions.listener.sortable.class' => 'Gedmo\\Sortable\\SortableListener',
            'stof_doctrine_extensions.listener.softdeleteable.class' => 'Gedmo\\SoftDeleteable\\SoftDeleteableListener',
            'stof_doctrine_extensions.listener.uploadable.class' => 'Gedmo\\Uploadable\\UploadableListener',
            'stof_doctrine_extensions.listener.reference_integrity.class' => 'Gedmo\\ReferenceIntegrity\\ReferenceIntegrityListener',
            'knp_paginator.class' => 'Knp\\Component\\Pager\\Paginator',
            'knp_paginator.helper.processor.class' => 'Knp\\Bundle\\PaginatorBundle\\Helper\\Processor',
            'knp_paginator.template.pagination' => 'KnpPaginatorBundle:Pagination:twitter_bootstrap_v3_pagination.html.twig',
            'knp_paginator.template.filtration' => 'KnpPaginatorBundle:Pagination:filtration.html.twig',
            'knp_paginator.template.sortable' => 'KnpPaginatorBundle:Pagination:sortable_link.html.twig',
            'knp_paginator.page_range' => 5,
            'oneup_uploader.chunks.manager.class' => 'Oneup\\UploaderBundle\\Uploader\\Chunk\\ChunkManager',
            'oneup_uploader.chunks_storage.gaufrette.class' => 'Oneup\\UploaderBundle\\Uploader\\Chunk\\Storage\\GaufretteStorage',
            'oneup_uploader.chunks_storage.flysystem.class' => 'Oneup\\UploaderBundle\\Uploader\\Chunk\\Storage\\FlysystemStorage',
            'oneup_uploader.chunks_storage.filesystem.class' => 'Oneup\\UploaderBundle\\Uploader\\Chunk\\Storage\\FilesystemStorage',
            'oneup_uploader.namer.uniqid.class' => 'Oneup\\UploaderBundle\\Uploader\\Naming\\UniqidNamer',
            'oneup_uploader.routing.loader.class' => 'Oneup\\UploaderBundle\\Routing\\RouteLoader',
            'oneup_uploader.storage.gaufrette.class' => 'Oneup\\UploaderBundle\\Uploader\\Storage\\GaufretteStorage',
            'oneup_uploader.storage.flysystem.class' => 'Oneup\\UploaderBundle\\Uploader\\Storage\\FlysystemStorage',
            'oneup_uploader.storage.filesystem.class' => 'Oneup\\UploaderBundle\\Uploader\\Storage\\FilesystemStorage',
            'oneup_uploader.orphanage.class' => 'Oneup\\UploaderBundle\\Uploader\\Storage\\FilesystemOrphanageStorage',
            'oneup_uploader.orphanage.manager.class' => 'Oneup\\UploaderBundle\\Uploader\\Orphanage\\OrphanageManager',
            'oneup_uploader.controller.fineuploader.class' => 'Oneup\\UploaderBundle\\Controller\\FineUploaderController',
            'oneup_uploader.controller.blueimp.class' => 'Oneup\\UploaderBundle\\Controller\\BlueimpController',
            'oneup_uploader.controller.uploadify.class' => 'Oneup\\UploaderBundle\\Controller\\UploadifyController',
            'oneup_uploader.controller.yui3.class' => 'Oneup\\UploaderBundle\\Controller\\YUI3Controller',
            'oneup_uploader.controller.fancyupload.class' => 'Oneup\\UploaderBundle\\Controller\\FancyUploadController',
            'oneup_uploader.controller.mooupload.class' => 'Oneup\\UploaderBundle\\Controller\\MooUploadController',
            'oneup_uploader.controller.plupload.class' => 'Oneup\\UploaderBundle\\Controller\\PluploadController',
            'oneup_uploader.controller.dropzone.class' => 'Oneup\\UploaderBundle\\Controller\\DropzoneController',
            'oneup_uploader.error_handler.noop.class' => 'Oneup\\UploaderBundle\\Uploader\\ErrorHandler\\NoopErrorHandler',
            'oneup_uploader.error_handler.blueimp.class' => 'Oneup\\UploaderBundle\\Uploader\\ErrorHandler\\BlueimpErrorHandler',
            'oneup_uploader.error_handler.dropzone.class' => 'Oneup\\UploaderBundle\\Uploader\\ErrorHandler\\DropzoneErrorHandler',
            'oneup_uploader.chunks' => array(
                'maxage' => 604800,
                'storage' => array(
                    'type' => 'filesystem',
                    'filesystem' => NULL,
                    'directory' => (__DIR__.'/uploader/chunks'),
                    'stream_wrapper' => NULL,
                    'sync_buffer_size' => '100K',
                    'prefix' => 'chunks',
                ),
                'load_distribution' => true,
            ),
            'oneup_uploader.orphanage' => array(
                'maxage' => 604800,
                'directory' => (__DIR__.'/uploader/orphanage'),
            ),
            'oneup_uploader.config.images' => array(
                'frontend' => 'blueimp',
                'storage' => array(
                    'directory' => '/app/app/../web/images',
                    'service' => NULL,
                    'type' => 'filesystem',
                    'filesystem' => NULL,
                    'stream_wrapper' => NULL,
                    'sync_buffer_size' => '100K',
                ),
                'custom_frontend' => array(
                    'name' => NULL,
                    'class' => NULL,
                ),
                'route_prefix' => '',
                'allowed_mimetypes' => array(

                ),
                'disallowed_mimetypes' => array(

                ),
                'error_handler' => NULL,
                'max_size' => 9223372036854775807,
                'use_orphanage' => false,
                'enable_progress' => false,
                'enable_cancelation' => false,
                'namer' => 'oneup_uploader.namer.uniqid',
                'root_folder' => false,
            ),
            'oneup_uploader.config.sounds' => array(
                'frontend' => 'blueimp',
                'storage' => array(
                    'directory' => '/app/app/../web/sounds',
                    'service' => NULL,
                    'type' => 'filesystem',
                    'filesystem' => NULL,
                    'stream_wrapper' => NULL,
                    'sync_buffer_size' => '100K',
                ),
                'custom_frontend' => array(
                    'name' => NULL,
                    'class' => NULL,
                ),
                'route_prefix' => '',
                'allowed_mimetypes' => array(

                ),
                'disallowed_mimetypes' => array(

                ),
                'error_handler' => NULL,
                'max_size' => 9223372036854775807,
                'use_orphanage' => false,
                'enable_progress' => false,
                'enable_cancelation' => false,
                'namer' => 'oneup_uploader.namer.uniqid',
                'root_folder' => false,
            ),
            'oneup_uploader.config.attestations' => array(
                'frontend' => 'blueimp',
                'storage' => array(
                    'directory' => '/app/app/../web/attestations',
                    'service' => NULL,
                    'type' => 'filesystem',
                    'filesystem' => NULL,
                    'stream_wrapper' => NULL,
                    'sync_buffer_size' => '100K',
                ),
                'custom_frontend' => array(
                    'name' => NULL,
                    'class' => NULL,
                ),
                'route_prefix' => '',
                'allowed_mimetypes' => array(

                ),
                'disallowed_mimetypes' => array(

                ),
                'error_handler' => NULL,
                'max_size' => 9223372036854775807,
                'use_orphanage' => false,
                'enable_progress' => false,
                'enable_cancelation' => false,
                'namer' => 'oneup_uploader.namer.uniqid',
                'root_folder' => false,
            ),
            'oneup_uploader.config' => array(
                'mappings' => array(
                    'images' => array(
                        'frontend' => 'blueimp',
                        'storage' => array(
                            'directory' => '/app/app/../web/images',
                            'service' => NULL,
                            'type' => 'filesystem',
                            'filesystem' => NULL,
                            'stream_wrapper' => NULL,
                            'sync_buffer_size' => '100K',
                        ),
                        'custom_frontend' => array(
                            'name' => NULL,
                            'class' => NULL,
                        ),
                        'route_prefix' => '',
                        'allowed_mimetypes' => array(

                        ),
                        'disallowed_mimetypes' => array(

                        ),
                        'error_handler' => NULL,
                        'max_size' => 9223372036854775807,
                        'use_orphanage' => false,
                        'enable_progress' => false,
                        'enable_cancelation' => false,
                        'namer' => 'oneup_uploader.namer.uniqid',
                        'root_folder' => false,
                    ),
                    'sounds' => array(
                        'frontend' => 'blueimp',
                        'storage' => array(
                            'directory' => '/app/app/../web/sounds',
                            'service' => NULL,
                            'type' => 'filesystem',
                            'filesystem' => NULL,
                            'stream_wrapper' => NULL,
                            'sync_buffer_size' => '100K',
                        ),
                        'custom_frontend' => array(
                            'name' => NULL,
                            'class' => NULL,
                        ),
                        'route_prefix' => '',
                        'allowed_mimetypes' => array(

                        ),
                        'disallowed_mimetypes' => array(

                        ),
                        'error_handler' => NULL,
                        'max_size' => 9223372036854775807,
                        'use_orphanage' => false,
                        'enable_progress' => false,
                        'enable_cancelation' => false,
                        'namer' => 'oneup_uploader.namer.uniqid',
                        'root_folder' => false,
                    ),
                    'attestations' => array(
                        'frontend' => 'blueimp',
                        'storage' => array(
                            'directory' => '/app/app/../web/attestations',
                            'service' => NULL,
                            'type' => 'filesystem',
                            'filesystem' => NULL,
                            'stream_wrapper' => NULL,
                            'sync_buffer_size' => '100K',
                        ),
                        'custom_frontend' => array(
                            'name' => NULL,
                            'class' => NULL,
                        ),
                        'route_prefix' => '',
                        'allowed_mimetypes' => array(

                        ),
                        'disallowed_mimetypes' => array(

                        ),
                        'error_handler' => NULL,
                        'max_size' => 9223372036854775807,
                        'use_orphanage' => false,
                        'enable_progress' => false,
                        'enable_cancelation' => false,
                        'namer' => 'oneup_uploader.namer.uniqid',
                        'root_folder' => false,
                    ),
                ),
                'chunks' => array(
                    'maxage' => 604800,
                    'storage' => array(
                        'type' => 'filesystem',
                        'filesystem' => NULL,
                        'directory' => (__DIR__.'/uploader/chunks'),
                        'stream_wrapper' => NULL,
                        'sync_buffer_size' => '100K',
                        'prefix' => 'chunks',
                    ),
                    'load_distribution' => true,
                ),
                'orphanage' => array(
                    'maxage' => 604800,
                    'directory' => (__DIR__.'/uploader/orphanage'),
                ),
                'twig' => true,
            ),
            'oneup_uploader.controllers' => array(
                'images' => array(
                    0 => 'oneup_uploader.controller.images',
                    1 => array(
                        'enable_progress' => false,
                        'enable_cancelation' => false,
                        'route_prefix' => '',
                    ),
                ),
                'sounds' => array(
                    0 => 'oneup_uploader.controller.sounds',
                    1 => array(
                        'enable_progress' => false,
                        'enable_cancelation' => false,
                        'route_prefix' => '',
                    ),
                ),
                'attestations' => array(
                    0 => 'oneup_uploader.controller.attestations',
                    1 => array(
                        'enable_progress' => false,
                        'enable_cancelation' => false,
                        'route_prefix' => '',
                    ),
                ),
            ),
            'oneup_uploader.maxsize' => array(
                'images' => 52428800,
                'sounds' => 52428800,
                'attestations' => 52428800,
            ),
            'console.command.ids' => array(

            ),
        );
    }
}
