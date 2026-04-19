<?php

defined('TYPO3') || die('Access denied.');

// Activate extension container if extension is activated
if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('container')) {
    // MODAL CONTAINER
    \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
        (
            new \B13\Container\Tca\ContainerConfiguration(
                'container_modal',
                'LLL:EXT:bp_container_modal/Resources/Private/Language/locallang_be.xlf:container.modal.title',
                'LLL:EXT:bp_container_modal/Resources/Private/Language/locallang_be.xlf:container.modal.description',
                [
                    [
                        [
                            'name' => 'LLL:EXT:bp_container_modal/Resources/Private/Language/locallang_be.xlf:container.modal.column',
                            'colPos' => 201
                        ]
                    ]
                ]
            )
        )
            ->setIcon('EXT:bp_container_modal/Resources/Public/Icons/Container/Modal.svg')
            ->setSaveAndCloseInNewContentElementWizard(false)
    );
}


// Add Flexform
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    '*',
    'FILE:EXT:bp_container_modal/Configuration/FlexForms/Container/Modal.xml',
    'container_modal'
);

// Add field to palette
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'tt_content',
    'containerModal',
    'header;LLL:EXT:bp_container_modal/Resources/Private/Language/locallang_be.xlf:header_formlabel,'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'tt_content',
    'containerModal',
    '--linebreak--,header_position;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position_formlabel,'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'tt_content',
    'containerModal',
    'header_icon;LLL:EXT:iconpack/Resources/Private/Language/locallang_be.xlf:tt_content.header_icon,'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'tt_content',
    'containerModal',
    '--linebreak--,pi_flexform;LLL:EXT:bp_container_modal/Resources/Private/Language/locallang_be.xlf:pi_flexform'
);

// Add palette to TCA
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'tt_content',
    '--palette--;;containerModal',
    'container_modal',
    'replace:header'
);
