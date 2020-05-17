<?php
/**
 * Copyright © Delgraf. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Delgraf\ProvinceItaliane\Setup\Patch\Data;

use Magento\Directory\Setup\DataInstaller;
use Magento\Framework\App\ResourceConnection;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Framework\Setup\Patch\PatchVersionInterface;

/**
 * Add Provinces for Italy.
 */
class AddDataForItaly implements DataPatchInterface, PatchVersionInterface
{
    /**
     * @var ModuleDataSetupInterface
     */
    private $moduleDataSetup;

    /**
     * @var \Magento\Directory\Setup\DataInstallerFactory
     */
    private $dataInstallerFactory;

    /**
     * AddDataForItaly constructor.
     *
     * @param ModuleDataSetupInterface $moduleDataSetup
     * @param \Magento\Directory\Setup\DataInstallerFactory $dataInstallerFactory
     */
    public function __construct(
        ModuleDataSetupInterface $moduleDataSetup,
        \Magento\Directory\Setup\DataInstallerFactory $dataInstallerFactory
    ) {
        $this->moduleDataSetup = $moduleDataSetup;
        $this->dataInstallerFactory = $dataInstallerFactory;
    }

    /**
     * @inheritdoc
     */
    public function apply()
    {
        /** @var DataInstaller $dataInstaller */
        $dataInstaller = $this->dataInstallerFactory->create();
        $dataInstaller->addCountryRegions(
            $this->moduleDataSetup->getConnection(),
            $this->getDataForItaly()
        );
    }

    /**
     * Italian provinces data.
     *
     * @return array
     */
    private function getDataForItaly()
    {
        return [
            ['IT', 'AG', 'Agrigento'],
            ['IT', 'AL', 'Alessandria'],
            ['IT', 'AN', 'Ancona'],
            ['IT', 'AO', 'Aosta'],
            ['IT', 'AR', 'Arezzo'],
            ['IT', 'AP', 'Ascoli Piceno'],
            ['IT', 'AT', 'Asti'],
            ['IT', 'AV', 'Avellino'],
            ['IT', 'BA', 'Bari'],
            ['IT', 'BT', 'Barletta-Andria-Trani'],
            ['IT', 'BL', 'Belluno'],
            ['IT', 'BN', 'Benevento'],
            ['IT', 'BG', 'Bergamo'],
            ['IT', 'BI', 'Biella'],
            ['IT', 'BO', 'Bologna'],
            ['IT', 'BZ', 'Bolzano'],
            ['IT', 'BS', 'Brescia'],
            ['IT', 'BR', 'Brindisi'],
            ['IT', 'CA', 'Cagliari'],
            ['IT', 'CL', 'Caltanissetta'],
            ['IT', 'CB', 'Campobasso'],
            ['IT', 'CE', 'Caserta'],
            ['IT', 'CT', 'Catania'],
            ['IT', 'CZ', 'Catanzaro'],
            ['IT', 'CH', 'Chieti'],
            ['IT', 'CO', 'Como'],
            ['IT', 'CS', 'Cosenza'],
            ['IT', 'CR', 'Cremona'],
            ['IT', 'KR', 'Crotone'],
            ['IT', 'CN', 'Cuneo'],
            ['IT', 'EN', 'Enna'],
            ['IT', 'FM', 'Fermo'],
            ['IT', 'FE', 'Ferrara'],
            ['IT', 'FI', 'Firenze'],
            ['IT', 'FG', 'Foggia'],
            ['IT', 'FC', 'Forlì-Cesena'],
            ['IT', 'FR', 'Frosinone'],
            ['IT', 'GE', 'Genova'],
            ['IT', 'GO', 'Gorizia'],
            ['IT', 'GR', 'Grosseto'],
            ['IT', 'IM', 'Imperia'],
            ['IT', 'IS', 'Isernia'],
            ['IT', 'SP', 'La Spezia'],
            ['IT', 'AQ', 'L\'Aquila'],
            ['IT', 'LT', 'Latina'],
            ['IT', 'LE', 'Lecce'],
            ['IT', 'LC', 'Lecco'],
            ['IT', 'LI', 'Livorno'],
            ['IT', 'LO', 'Lodi'],
            ['IT', 'LU', 'Lucca'],
            ['IT', 'MC', 'Macerata'],
            ['IT', 'MN', 'Mantova'],
            ['IT', 'MS', 'Massa-Carrara'],
            ['IT', 'MT', 'Matera'],
            ['IT', 'ME', 'Messina'],
            ['IT', 'MI', 'Milano'],
            ['IT', 'MO', 'Modena'],
            ['IT', 'MB', 'Monza e della Brianza'],
            ['IT', 'NA', 'Napoli'],
            ['IT', 'NO', 'Novara'],
            ['IT', 'NU', 'Nuoro'],
            ['IT', 'OR', 'Oristano'],
            ['IT', 'PD', 'Padova'],
            ['IT', 'PA', 'Palermo'],
            ['IT', 'PR', 'Parma'],
            ['IT', 'PV', 'Pavia'],
            ['IT', 'PG', 'Perugia'],
            ['IT', 'PU', 'Pesaro e Urbino'],
            ['IT', 'PE', 'Pescara'],
            ['IT', 'PC', 'Piacenza'],
            ['IT', 'PI', 'Pisa'],
            ['IT', 'PT', 'Pistoia'],
            ['IT', 'PN', 'Pordenone'],
            ['IT', 'PZ', 'Potenza'],
            ['IT', 'PO', 'Prato'],
            ['IT', 'RG', 'Ragusa'],
            ['IT', 'RA', 'Ravenna'],
            ['IT', 'RC', 'Reggio Calabria'],
            ['IT', 'RE', 'Reggio Emilia'],
            ['IT', 'RI', 'Rieti'],
            ['IT', 'RN', 'Rimini'],
            ['IT', 'RM', 'Roma'],
            ['IT', 'RO', 'Rovigo'],
            ['IT', 'SA', 'Salerno'],
            ['IT', 'SS', 'Sassari'],
            ['IT', 'SV', 'Savona'],
            ['IT', 'SI', 'Siena'],
            ['IT', 'SR', 'Siracusa'],
            ['IT', 'SO', 'Sondrio'],
            ['IT', 'SU', 'Sud Sardegna'],
            ['IT', 'TA', 'Taranto'],
            ['IT', 'TE', 'Teramo'],
            ['IT', 'TR', 'Terni'],
            ['IT', 'TO', 'Torino'],
            ['IT', 'TP', 'Trapani'],
            ['IT', 'TN', 'Trento'],
            ['IT', 'TV', 'Treviso'],
            ['IT', 'TS', 'Trieste'],
            ['IT', 'UD', 'Udine'],
            ['IT', 'VA', 'Varese'],
            ['IT', 'VE', 'Venezia'],
            ['IT', 'VB', 'Verbano-Cusio-Ossola'],
            ['IT', 'VC', 'Vercelli'],
            ['IT', 'VR', 'Verona'],
            ['IT', 'VV', 'Vibo Valentia'],
            ['IT', 'VI', 'Vicenza'],
            ['IT', 'VT', 'Viterbo']
        ];
    }

    /**
     * @inheritdoc
     */
    public static function getDependencies()
    {
        return [
            InitializeDirectoryData::class,
        ];
    }

    /**
     * @inheritdoc
     */
    public static function getVersion()
    {
        return '1.0.0';
    }

    /**
     * @inheritdoc
     */
    public function getAliases()
    {
        return [];
    }
}
