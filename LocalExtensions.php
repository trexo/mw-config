<?php

// Set up extensions for use on wikis that are not global
if ( $wmgUseAddHTMLMetaAndTitle ) {
	require_once( "$IP/extensions/AddHTMLMetaAndTitle/Add_HTML_Meta_and_Title.php" );
}

if ( $wmgUseAdminLinks ) {
	require_once( "$IP/extensions/AdminLinks/AdminLinks.php" );
}

if ( $wmgUseBabel ) {
	require_once( "$IP/extensions/Babel/Babel.php" );
	require_once( "$IP/extensions/cldr/cldr.php" );
}

if ( $wmgUseBetaFeatures ) {
	wfLoadExtension( 'BetaFeatures' );
}

if ( $wmgUseCharInsert ) {
	require_once( "$IP/extensions/CharInsert/CharInsert.php" );
}

if ( $wmgUseContactPage) {
	require_once( "$IP/extensions/ContactPage/ContactPage.php" );

	// Contact Page is a fairly complex (well long) extension to configure.
	// All config should be in the file below on a wikidb basis.
	require_once( "/srv/mediawiki/config/ContactPage.php" );
}

if ( $wmgUseCollapsibleVector ) {
	wfLoadExtension( 'CollapsibleVector' );
}

if ( $wmgUseCreateWiki ) {
	require_once( "$IP/extensions/CreateWiki/CreateWiki.php" );
	$wgCreateWikiSQLfiles = $wmgCreateWikiSQLfiles;
}

if ( $wmgUseCSS ) {
	require_once( "$IP/extensions/CSS/CSS.php" );
}

if ( $wmgUseDynamicPageList ) {
	require_once( "$IP/extensions/DynamicPageList/DynamicPageList.php" );
}

if ( $wmgUseEditcount ) {
    wfLoadExtension( 'Editcount' );
}

if ( $wmgUseEchoThanks ) {
	require_once( "$IP/extensions/Echo/Echo.php" );
	require_once( "$IP/extensions/Thanks/Thanks.php" );
}

if ( $wmgUseFlow ) {
	require_once( "$IP/extensions/Flow/Flow.php" );
	$wgGroupPermissions['bureaucrat']['flow-create-board'] = true;
	$wgFlowOccupyNamespaces = $wmgFlowOccupyNamespaces;

	$wgVirtualRestConfig['modules']['parsoid'] = array(
		'url' => 'http://parsoid1.miraheze.org:8142',
		'prefix' => $wgDBname,
	);
}

if ( $wmgUseFeaturedFeeds ) {
	require_once( "$IP/extensions/FeaturedFeeds/FeaturedFeeds.php" );
}

if ( $wmgUseForeground ) {
	require_once( "$IP/skins/foreground/foreground.php" );
}

if ( $wmgUseHighlightLinksInCategory ) {
	wfLoadExtension( 'HighlightLinksInCategory' );
}

if ( $wmgUseImageMap ) {
	wfLoadExtension( 'ImageMap' );
}

if ( $wmgUseInputBox ) {
	wfLoadExtension( 'InputBox' );
}

if ( $wmgUseJosa ) {
	require_once( "$IP/extensions/Josa/Josa.php" );
}

if ( $wmgUseLoopsCombo ) {
	require_once( "$IP/extensions/Variables/Variables.php" );
	require_once( "$IP/extensions/Loops/Loops.php");
}

if ( $wmgUseMsPackage ) {
	require_once( "$IP/extensions/MsUpload/MsUpload.php" );
	require_once( "$IP/extensions/MsLinks/MsLinks.php" );
	require_once( "$IP/extensions/MsCatSelect/MsCatSelect.php" );
}

if ( $wmgUseMsUpload ) {
	require_once( "$IP/extensions/MsUpload/MsUpload.php" );
}

if ( $wmgUseMultimediaViewer ) {
	require_once( "$IP/extensions/MultimediaViewer/MultimediaViewer.php" );
}

if ( $wmgUseMultiUpload ) {
	require_once( "$IP/extensions/MultiUpload/MultiUpload.php" );
}

if ( $wmgUseMobileFrontend ) {
	require_once( "$IP/extensions/MobileFrontend/MobileFrontend.php" );
}

if ( $wmgUseMonaco ) {
	require_once( "$IP/skins/Monaco/monaco.php" );
}

if ( $wmgUseNativeSvgHandler ) {
	require_once( "$IP/extensions/NativeSvgHandler/NativeSvgHandler.php" );
}

if ( $wmgUseNewestPages ) {
	require_once( "$IP/extensions/NewestPages/NewestPages.php" );
}

if ( $wmgUseNewUserMessage ) {
	require_once( "$IP/extensions/NewUserMessage/NewUserMessage.php" );
}

if ( $wmgUseNoTitle ) {
	require_once( "$IP/extensions/NoTitle/NoTitle.php" );
	$wgRestrictDisplayTitle = false;
}

if ( $wmgUsePageNotice ) {
	require_once( "$IP/extensions/PageNotice/PageNotice.php" );
}

if ( $wmgUsePoll ) {
	require_once( "$IP/extensions/Poll/Poll.php" );
}

if ( $wmgUsePopups ) {
	require_once( "$IP/extensions/PageImages/PageImages.php" );
	require_once( "$IP/extensions/Popups/Popups.php" );
	require_once( "$IP/extensions/TextExtracts/TextExtracts.php" );
}

if ( $wmgUseSandboxLink ) {
	require_once( "$IP/extensions/SandboxLink/SandboxLink.php" );
}

if ( $wmgUseScribunto ) {
	require_once( "$IP/extensions/Scribunto/Scribunto.php" );
}
