<?php

use App\Models\Permission;
use App\Models\XrefDistrict;
use App\Models\XrefSubdistrict;
use Eighty8\LaravelSeeder\Migration\MigratableSeeder;
use Eighty8\LaravelSeeder\Repository\DisableForeignKeysTrait;

class XrefSubdistrictsSarawakSeeder extends MigratableSeeder
{
    use DisableForeignKeysTrait;

    /**
     * Run the database seeder.
     */
    public function run(): void
    {
        $districts = XrefDistrict::where('ddsa_code', 'like', '13%')->get()->pluck('id', 'ddsa_code');

        $data_seeds = [
            /*
             * sarawak
             */
            /*
             * === KUCHING
             */
            ['ddsa_code' => '130101', 'name' => 'Pueh Land', 'level' => 1, 'xref_district_id' => '1301'],
            ['ddsa_code' => '130102', 'name' => 'Gading Lundu', 'level' => 1, 'xref_district_id' => '1301'],
            ['ddsa_code' => '130103', 'name' => 'Stungkor', 'level' => 1, 'xref_district_id' => '1301'],
            ['ddsa_code' => '130104', 'name' => 'Sampadi', 'level' => 1, 'xref_district_id' => '1301'],
            ['ddsa_code' => '130105', 'name' => 'Jagoi', 'level' => 1, 'xref_district_id' => '1301'],
            ['ddsa_code' => '130106', 'name' => 'Senggi Poak', 'level' => 1, 'xref_district_id' => '1301'],
            ['ddsa_code' => '130107', 'name' => 'Matang', 'level' => 1, 'xref_district_id' => '1301'],
            ['ddsa_code' => '130108', 'name' => 'Salak', 'level' => 1, 'xref_district_id' => '1301'],
            ['ddsa_code' => '130109', 'name' => 'Pangkalan Ampat', 'level' => 1, 'xref_district_id' => '1301'],
            ['ddsa_code' => '130110', 'name' => 'Kuching Utara', 'level' => 1, 'xref_district_id' => '1301'],
            ['ddsa_code' => '130111', 'name' => 'Kuching Tengah', 'level' => 1, 'xref_district_id' => '1301'],
            ['ddsa_code' => '130112', 'name' => 'Bandar Kuching', 'level' => 1, 'xref_district_id' => '1301'],
            ['ddsa_code' => '130113', 'name' => 'Sentah-segu', 'level' => 1, 'xref_district_id' => '1301'],
            ['ddsa_code' => '130114', 'name' => 'Muara Tebas', 'level' => 1, 'xref_district_id' => '1301'],
            ['ddsa_code' => '130125', 'name' => 'Bandar Batu Kawa', 'level' => 2, 'xref_district_id' => '1301'],
            ['ddsa_code' => '130126', 'name' => 'Batu 8, JALAN MATANG', 'level' => 1, 'xref_district_id' => '1301'],
            ['ddsa_code' => '130127', 'name' => 'Bandar Sungai Tengah', 'level' => 2, 'xref_district_id' => '1301'],
            ['ddsa_code' => '130128', 'name' => 'Bandar Batu Kitang', 'level' => 2, 'xref_district_id' => '1301'],
            ['ddsa_code' => '130129', 'name' => 'Batu 15, Jalan Senggang', 'level' => 1, 'xref_district_id' => '1301'],
            ['ddsa_code' => '130130', 'name' => '175, Jalan Senggang', 'level' => 1, 'xref_district_id' => '1301'],
            ['ddsa_code' => '130131', 'name' => 'Bandar Jalan Batu 19, Jalan Senggang', 'level' => 2, 'xref_district_id' => '1301'],
            ['ddsa_code' => '130132', 'name' => 'Bandar Batu 24, Jalan Senggang', 'level' => 2, 'xref_district_id' => '1301'],
            ['ddsa_code' => '130133', 'name' => 'Bandar Pangkalan Kut', 'level' => 2, 'xref_district_id' => '1301'],
            ['ddsa_code' => '130149', 'name' => 'Bandar Beliong', 'level' => 2, 'xref_district_id' => '1301'],
            ['ddsa_code' => '130150', 'name' => 'Bandar Bako', 'level' => 2, 'xref_district_id' => '1301'],
            ['ddsa_code' => '130155', 'name' => 'Bandar Sematang', 'level' => 2, 'xref_district_id' => '1301'],
            ['ddsa_code' => '130156', 'name' => 'Bandar Lundu', 'level' => 2, 'xref_district_id' => '1301'],
            ['ddsa_code' => '130157', 'name' => 'Bandar Jangkar', 'level' => 2, 'xref_district_id' => '1301'],
            ['ddsa_code' => '130158', 'name' => 'Bandar Rambungan', 'level' => 2, 'xref_district_id' => '1301'],
            ['ddsa_code' => '130159', 'name' => 'Bandar Stunkor', 'level' => 2, 'xref_district_id' => '1301'],
            ['ddsa_code' => '130160', 'name' => 'Bandar Kranji', 'level' => 2, 'xref_district_id' => '1301'],
            ['ddsa_code' => '130161', 'name' => 'Bandar Siniwan', 'level' => 2, 'xref_district_id' => '1301'],
            ['ddsa_code' => '130162', 'name' => 'Bandar Paku', 'level' => 2, 'xref_district_id' => '1301'],
            ['ddsa_code' => '130163', 'name' => 'Bandar Jambusan', 'level' => 2, 'xref_district_id' => '1301'],
            ['ddsa_code' => '130164', 'name' => 'Bandar Bau', 'level' => 2, 'xref_district_id' => '1301'],
            ['ddsa_code' => '130165', 'name' => 'Bandar Buso', 'level' => 2, 'xref_district_id' => '1301'],
            ['ddsa_code' => '130166', 'name' => 'Bandar Tundong', 'level' => 2, 'xref_district_id' => '1301'],
            ['ddsa_code' => '130167', 'name' => 'Bandar Musi', 'level' => 2, 'xref_district_id' => '1301'],
            ['ddsa_code' => '130168', 'name' => 'Bandar Tai Ton', 'level' => 2, 'xref_district_id' => '1301'],
            ['ddsa_code' => '130169', 'name' => 'Bandar Bidi', 'level' => 2, 'xref_district_id' => '1301'],
            ['ddsa_code' => '130170', 'name' => 'Bandar Krokong', 'level' => 2, 'xref_district_id' => '1301'],
            ['ddsa_code' => '130171', 'name' => 'Bandar Pangkalan Tebang', 'level' => 2, 'xref_district_id' => '1301'],
            ['ddsa_code' => '130172', 'name' => 'Bandar Pejiru', 'level' => 2, 'xref_district_id' => '1301'],
            ['ddsa_code' => '130173', 'name' => 'Bandar Tiang Bekap', 'level' => 2, 'xref_district_id' => '1301'],
            ['ddsa_code' => '130174', 'name' => 'Bandar Baratok', 'level' => 2, 'xref_district_id' => '1301'],
            ['ddsa_code' => '130175', 'name' => 'Bandar Tapah', 'level' => 2, 'xref_district_id' => '1301'],
            ['ddsa_code' => '130176', 'name' => 'Bandar Siburan', 'level' => 2, 'xref_district_id' => '1301'],
            ['ddsa_code' => '130177', 'name' => 'Bandar Terbat', 'level' => 2, 'xref_district_id' => '1301'],
            ['ddsa_code' => '130178', 'name' => 'Bandar Jalan Batu 17, Jalan Senggang', 'level' => 2, 'xref_district_id' => '1301'],
            /*
             * === SRI AMAN
             */
            ['ddsa_code' => '130201', 'name' => 'Undup', 'level' => 1, 'xref_district_id' => '1302'],
            ['ddsa_code' => '130202', 'name' => 'Klauh', 'level' => 1, 'xref_district_id' => '1302'],
            ['ddsa_code' => '130203', 'name' => 'Bijat', 'level' => 1, 'xref_district_id' => '1302'],
            ['ddsa_code' => '130204', 'name' => 'Skarang', 'level' => 1, 'xref_district_id' => '1302'],
            ['ddsa_code' => '130205', 'name' => 'Keranggas', 'level' => 1, 'xref_district_id' => '1302'],
            ['ddsa_code' => '130206', 'name' => 'Marup', 'level' => 1, 'xref_district_id' => '1302'],
            ['ddsa_code' => '130207', 'name' => 'Lamanak', 'level' => 1, 'xref_district_id' => '1302'],
            ['ddsa_code' => '130208', 'name' => 'Bukit Besai', 'level' => 1, 'xref_district_id' => '1302'],
            ['ddsa_code' => '130209', 'name' => 'Ai Engkari', 'level' => 1, 'xref_district_id' => '1302'],
            ['ddsa_code' => '130210', 'name' => 'Lesong', 'level' => 1, 'xref_district_id' => '1302'],
            ['ddsa_code' => '130211', 'name' => 'Selanjang', 'level' => 1, 'xref_district_id' => '1302'],
            ['ddsa_code' => '130212', 'name' => 'Silantek', 'level' => 1, 'xref_district_id' => '1302'],
            ['ddsa_code' => '130224', 'name' => 'Sirnanggang', 'level' => 1, 'xref_district_id' => '1302'],
            ['ddsa_code' => '130225', 'name' => 'Bandar Lingga', 'level' => 2, 'xref_district_id' => '1302'],
            ['ddsa_code' => '130227', 'name' => 'Bandar Lubok Antu', 'level' => 2, 'xref_district_id' => '1302'],
            ['ddsa_code' => '130228', 'name' => 'Bandar Engkilili', 'level' => 2, 'xref_district_id' => '1302'],
            ['ddsa_code' => '130236', 'name' => 'Bandar Batu Lintang', 'level' => 2, 'xref_district_id' => '1302'],
            ['ddsa_code' => '130244', 'name' => 'Bandar Banting', 'level' => 2, 'xref_district_id' => '1302'],
            ['ddsa_code' => '130245', 'name' => 'Bandar Pantu', 'level' => 2, 'xref_district_id' => '1302'],
            ['ddsa_code' => '130250', 'name' => 'Bandar Bakong', 'level' => 2, 'xref_district_id' => '1302'],
            ['ddsa_code' => '130252', 'name' => 'Bandar Undup', 'level' => 2, 'xref_district_id' => '1302'],
            ['ddsa_code' => '130271', 'name' => 'Bandar Skrang', 'level' => 2, 'xref_district_id' => '1302'],
            ['ddsa_code' => '130272', 'name' => 'Bandar Melugu', 'level' => 2, 'xref_district_id' => '1302'],
            ['ddsa_code' => '130273', 'name' => 'Bandar Sabu', 'level' => 2, 'xref_district_id' => '1302'],
            /*
             * === SIBU
             */
            ['ddsa_code' => '130301', 'name' => 'Seduan', 'level' => 1, 'xref_district_id' => '1303'],
            ['ddsa_code' => '130302', 'name' => 'Engkilo', 'level' => 1, 'xref_district_id' => '1303'],
            ['ddsa_code' => '130303', 'name' => 'Pasai-siong', 'level' => 1, 'xref_district_id' => '1303'],
            ['ddsa_code' => '130304', 'name' => 'Assan', 'level' => 1, 'xref_district_id' => '1303'],
            ['ddsa_code' => '130305', 'name' => 'Menyan', 'level' => 1, 'xref_district_id' => '1303'],
            ['ddsa_code' => '130306', 'name' => 'Kabang', 'level' => 1, 'xref_district_id' => '1303'],
            ['ddsa_code' => '130319', 'name' => 'Lukut', 'level' => 1, 'xref_district_id' => '1303'],
            ['ddsa_code' => '130320', 'name' => 'Mapai', 'level' => 1, 'xref_district_id' => '1303'],
            ['ddsa_code' => '130321', 'name' => 'Maroh', 'level' => 1, 'xref_district_id' => '1303'],
            ['ddsa_code' => '130322', 'name' => 'Spali', 'level' => 1, 'xref_district_id' => '1303'],
            ['ddsa_code' => '130337', 'name' => 'Qya-dalat', 'level' => 1, 'xref_district_id' => '1303'],
            ['ddsa_code' => '130338', 'name' => 'Spapa', 'level' => 1, 'xref_district_id' => '1303'],
            ['ddsa_code' => '130339', 'name' => 'Paku', 'level' => 1, 'xref_district_id' => '1303'],
            ['ddsa_code' => '130340', 'name' => 'Lalai', 'level' => 1, 'xref_district_id' => '1303'],
            ['ddsa_code' => '130341', 'name' => 'Mukah', 'level' => 1, 'xref_district_id' => '1303'],
            ['ddsa_code' => '130342', 'name' => 'Gigis', 'level' => 1, 'xref_district_id' => '1303'],
            ['ddsa_code' => '130343', 'name' => 'Selangau', 'level' => 1, 'xref_district_id' => '1303'],
            ['ddsa_code' => '130344', 'name' => 'Balingan', 'level' => 1, 'xref_district_id' => '1303'],
            ['ddsa_code' => '130345', 'name' => 'Arip', 'level' => 1, 'xref_district_id' => '1303'],
            ['ddsa_code' => '130346', 'name' => 'Pelungau', 'level' => 1, 'xref_district_id' => '1303'],
            ['ddsa_code' => '130347', 'name' => 'Bawan', 'level' => 1, 'xref_district_id' => '1303'],
            ['ddsa_code' => '130348', 'name' => 'Buloh', 'level' => 1, 'xref_district_id' => '1303'],
            ['ddsa_code' => '130349', 'name' => 'Bandar Sibu', 'level' => 2, 'xref_district_id' => '1303'],
            ['ddsa_code' => '130350', 'name' => 'Bandar Sengei Merah', 'level' => 2, 'xref_district_id' => '1303'],
            ['ddsa_code' => '130351', 'name' => 'Bandar Teku', 'level' => 2, 'xref_district_id' => '1303'],
            ['ddsa_code' => '130352', 'name' => 'Bandar Durin', 'level' => 2, 'xref_district_id' => '1303'],
            ['ddsa_code' => '130360', 'name' => 'Bandar Kanowit', 'level' => 2, 'xref_district_id' => '1303'],
            ['ddsa_code' => '130363', 'name' => 'Bandar Dap', 'level' => 2, 'xref_district_id' => '1303'],
            ['ddsa_code' => '130365', 'name' => 'Bandar Machan', 'level' => 2, 'xref_district_id' => '1303'],
            ['ddsa_code' => '130366', 'name' => 'Bandar Ngemah', 'level' => 2, 'xref_district_id' => '1303'],
            ['ddsa_code' => '130368', 'name' => 'Bandar Sengayan', 'level' => 2, 'xref_district_id' => '1303'],
            ['ddsa_code' => '130380', 'name' => 'Bandar Sibintek', 'level' => 2, 'xref_district_id' => '1303'],
            /*
             * === MIRI
             */
            ['ddsa_code' => '130401', 'name' => 'Konsesi Miri', 'level' => 1, 'xref_district_id' => '1304'],
            ['ddsa_code' => '130402', 'name' => 'Bandar Lutong', 'level' => 2, 'xref_district_id' => '1304'],
            ['ddsa_code' => '130403', 'name' => 'Bandar Bazar Jalan Riam', 'level' => 2, 'xref_district_id' => '1304'],
            ['ddsa_code' => '130404', 'name' => 'Kuala Baram', 'level' => 1, 'xref_district_id' => '1304'],
            ['ddsa_code' => '130407', 'name' => 'Lambir', 'level' => 1, 'xref_district_id' => '1304'],
            ['ddsa_code' => '130449', 'name' => 'Bandar Kuala Nyabor', 'level' => 2, 'xref_district_id' => '1304'],
            ['ddsa_code' => '130450', 'name' => 'Bareo', 'level' => 1, 'xref_district_id' => '1304'],
            ['ddsa_code' => '130452', 'name' => 'Apoh', 'level' => 1, 'xref_district_id' => '1304'],
            ['ddsa_code' => '130453', 'name' => 'Lio Matoh', 'level' => 1, 'xref_district_id' => '1304'],
            ['ddsa_code' => '130456', 'name' => 'Silat', 'level' => 1, 'xref_district_id' => '1304'],
            ['ddsa_code' => '130457', 'name' => 'Tutoh', 'level' => 1, 'xref_district_id' => '1304'],
            ['ddsa_code' => '130458', 'name' => 'Patah', 'level' => 1, 'xref_district_id' => '1304'],
            ['ddsa_code' => '130459', 'name' => 'Lepu Leju', 'level' => 1, 'xref_district_id' => '1304'],
            /*
             * === LIMBANG
             */
            ['ddsa_code' => '130501', 'name' => 'Danau', 'level' => 1, 'xref_district_id' => '1305'],
            ['ddsa_code' => '130502', 'name' => 'Panaruan', 'level' => 1, 'xref_district_id' => '1305'],
            ['ddsa_code' => '130503', 'name' => 'Trusan', 'level' => 1, 'xref_district_id' => '1305'],
            ['ddsa_code' => '130504', 'name' => 'Lawas', 'level' => 1, 'xref_district_id' => '1305'],
            ['ddsa_code' => '130505', 'name' => 'Merapok', 'level' => 1, 'xref_district_id' => '1305'],
            ['ddsa_code' => '130506', 'name' => 'Limbang', 'level' => 1, 'xref_district_id' => '1305'],
            ['ddsa_code' => '130507', 'name' => 'Danau', 'level' => 1, 'xref_district_id' => '1305'],
            ['ddsa_code' => '130508', 'name' => 'Nanga Medamit', 'level' => 1, 'xref_district_id' => '1305'],
            ['ddsa_code' => '130509', 'name' => 'Trusan', 'level' => 1, 'xref_district_id' => '1305'],
            ['ddsa_code' => '130510', 'name' => 'Lawas', 'level' => 1, 'xref_district_id' => '1305'],
            ['ddsa_code' => '130511', 'name' => 'Merapok', 'level' => 1, 'xref_district_id' => '1305'],
            ['ddsa_code' => '130512', 'name' => 'Ukong', 'level' => 1, 'xref_district_id' => '1305'],
            ['ddsa_code' => '130513', 'name' => 'Bandar Sundar', 'level' => 2, 'xref_district_id' => '1305'],
            ['ddsa_code' => '130514', 'name' => 'Sungai Adang', 'level' => 1, 'xref_district_id' => '1305'],
            ['ddsa_code' => '130515', 'name' => 'Long Napir', 'level' => 1, 'xref_district_id' => '1305'],
            ['ddsa_code' => '130516', 'name' => 'Sungai Addang', 'level' => 1, 'xref_district_id' => '1305'],
            ['ddsa_code' => '130517', 'name' => 'Tengoa-sukang', 'level' => 1, 'xref_district_id' => '1305'],
            ['ddsa_code' => '130518', 'name' => 'Long Nerapap', 'level' => 1, 'xref_district_id' => '1305'],
            ['ddsa_code' => '130519', 'name' => 'Long Semado', 'level' => 1, 'xref_district_id' => '1305'],
            ['ddsa_code' => '130520', 'name' => 'Bakalalan', 'level' => 1, 'xref_district_id' => '1305'],
            ['ddsa_code' => '130521', 'name' => 'Batu Lawi', 'level' => 1, 'xref_district_id' => '1305'],
            /*
             * === SARIKEI
             */
            ['ddsa_code' => '130607', 'name' => 'Serendang', 'level' => 1, 'xref_district_id' => '1306'],
            ['ddsa_code' => '130610', 'name' => 'Maradong', 'level' => 1, 'xref_district_id' => '1306'],
            ['ddsa_code' => '130611', 'name' => 'Tulai', 'level' => 1, 'xref_district_id' => '1306'],
            ['ddsa_code' => '130612', 'name' => 'Sarikei', 'level' => 1, 'xref_district_id' => '1306'],
            ['ddsa_code' => '130614', 'name' => 'Buan', 'level' => 1, 'xref_district_id' => '1306'],
            ['ddsa_code' => '130615', 'name' => 'Sare', 'level' => 1, 'xref_district_id' => '1306'],
            ['ddsa_code' => '130616', 'name' => 'Pedanum', 'level' => 1, 'xref_district_id' => '1306'],
            ['ddsa_code' => '130617', 'name' => 'Melurun', 'level' => 1, 'xref_district_id' => '1306'],
            ['ddsa_code' => '130618', 'name' => 'Jikang', 'level' => 1, 'xref_district_id' => '1306'],
            ['ddsa_code' => '130654', 'name' => 'Bandar Binatang', 'level' => 2, 'xref_district_id' => '1306'],
            ['ddsa_code' => '130661', 'name' => 'Julau', 'level' => 1, 'xref_district_id' => '1306'],
            ['ddsa_code' => '130662', 'name' => 'Bandar Pakan', 'level' => 2, 'xref_district_id' => '1306'],
            ['ddsa_code' => '130674', 'name' => 'Bandar Selalang', 'level' => 2, 'xref_district_id' => '1306'],
            ['ddsa_code' => '130677', 'name' => 'Gunung Ayer', 'level' => 1, 'xref_district_id' => '1306'],
            ['ddsa_code' => '130692', 'name' => 'Binatang', 'level' => 1, 'xref_district_id' => '1306'],
            /*
             * === KAPIT
             */
            ['ddsa_code' => '130723', 'name' => 'Katibas', 'level' => 1, 'xref_district_id' => '1307'],
            ['ddsa_code' => '130724', 'name' => 'Ibau', 'level' => 1, 'xref_district_id' => '1307'],
            ['ddsa_code' => '130725', 'name' => 'Menuan', 'level' => 1, 'xref_district_id' => '1307'],
            ['ddsa_code' => '130726', 'name' => 'Suau', 'level' => 1, 'xref_district_id' => '1307'],
            ['ddsa_code' => '130727', 'name' => 'Oyan', 'level' => 1, 'xref_district_id' => '1307'],
            ['ddsa_code' => '130728', 'name' => 'Baning', 'level' => 1, 'xref_district_id' => '1307'],
            ['ddsa_code' => '130729', 'name' => 'Majau', 'level' => 1, 'xref_district_id' => '1307'],
            ['ddsa_code' => '130730', 'name' => 'Menral', 'level' => 1, 'xref_district_id' => '1307'],
            ['ddsa_code' => '130731', 'name' => 'Metah', 'level' => 1, 'xref_district_id' => '1307'],
            ['ddsa_code' => '130732', 'name' => 'Rirong', 'level' => 1, 'xref_district_id' => '1307'],
            ['ddsa_code' => '130733', 'name' => 'Mamu', 'level' => 1, 'xref_district_id' => '1307'],
            ['ddsa_code' => '130735', 'name' => 'Angkuah', 'level' => 1, 'xref_district_id' => '1307'],
            ['ddsa_code' => '130736', 'name' => 'Pelagus', 'level' => 1, 'xref_district_id' => '1307'],
            ['ddsa_code' => '130769', 'name' => 'Bandar Kapit', 'level' => 2, 'xref_district_id' => '1307'],
            ['ddsa_code' => '130770', 'name' => 'Bandar Song', 'level' => 2, 'xref_district_id' => '1307'],
            ['ddsa_code' => '130781', 'name' => 'Bangkit', 'level' => 1, 'xref_district_id' => '1307'],
            ['ddsa_code' => '130782', 'name' => 'Batu Laga', 'level' => 1, 'xref_district_id' => '1307'],
            ['ddsa_code' => '130783', 'name' => 'Pelanduk', 'level' => 1, 'xref_district_id' => '1307'],
            ['ddsa_code' => '130784', 'name' => 'Entemu', 'level' => 1, 'xref_district_id' => '1307'],
            ['ddsa_code' => '130785', 'name' => 'Mengiong', 'level' => 1, 'xref_district_id' => '1307'],
            ['ddsa_code' => '130786', 'name' => 'Serani', 'level' => 1, 'xref_district_id' => '1307'],
            ['ddsa_code' => '130787', 'name' => 'Balui', 'level' => 1, 'xref_district_id' => '1307'],
            ['ddsa_code' => '130788', 'name' => 'Kumbong', 'level' => 1, 'xref_district_id' => '1307'],
            ['ddsa_code' => '130789', 'name' => 'Murum', 'level' => 1, 'xref_district_id' => '1307'],
            ['ddsa_code' => '130790', 'name' => 'Punan', 'level' => 1, 'xref_district_id' => '1307'],
            ['ddsa_code' => '130791', 'name' => 'Danum', 'level' => 1, 'xref_district_id' => '1307'],
            /*
             * === SAMARAHAN
             */
            ['ddsa_code' => '130810', 'name' => 'Lesong', 'level' => 1, 'xref_district_id' => '1308'],
            ['ddsa_code' => '130814', 'name' => 'Menuku', 'level' => 1, 'xref_district_id' => '1308'],
            ['ddsa_code' => '130815', 'name' => 'Kayan', 'level' => 1, 'xref_district_id' => '1308'],
            ['ddsa_code' => '130816', 'name' => 'Samarahan', 'level' => 1, 'xref_district_id' => '1308'],
            ['ddsa_code' => '130817', 'name' => 'Muara Tuang', 'level' => 1, 'xref_district_id' => '1308'],
            ['ddsa_code' => '130818', 'name' => 'Bukar-sadong', 'level' => 1, 'xref_district_id' => '1308'],
            ['ddsa_code' => '130819', 'name' => 'Sungai Kedup', 'level' => 1, 'xref_district_id' => '1308'],
            ['ddsa_code' => '130820', 'name' => 'Melikin Land', 'level' => 1, 'xref_district_id' => '1308'],
            ['ddsa_code' => '130821', 'name' => 'Sedilu-gedong', 'level' => 1, 'xref_district_id' => '1308'],
            ['ddsa_code' => '130822', 'name' => 'Sadong', 'level' => 1, 'xref_district_id' => '1308'],
            ['ddsa_code' => '130823', 'name' => 'Sebangan-kepayan', 'level' => 1, 'xref_district_id' => '1308'],
            ['ddsa_code' => '130824', 'name' => 'Punda-sabal', 'level' => 1, 'xref_district_id' => '1308'],
            ['ddsa_code' => '130826', 'name' => 'Bandar Sebuyau', 'level' => 2, 'xref_district_id' => '1308'],
            ['ddsa_code' => '130835', 'name' => 'Bandar Sungai Merah', 'level' => 2, 'xref_district_id' => '1308'],
            ['ddsa_code' => '130836', 'name' => 'Bandar Sunagai Merang', 'level' => 2, 'xref_district_id' => '1308'],
            ['ddsa_code' => '130837', 'name' => 'Bandar Sungai Palah', 'level' => 2, 'xref_district_id' => '1308'],
            ['ddsa_code' => '130839', 'name' => 'Batu 29, JALAN SIMANGGANG', 'level' => 1, 'xref_district_id' => '1308'],
            ['ddsa_code' => '130840', 'name' => 'Batu 32, JALAN SIMANGGANG', 'level' => 1, 'xref_district_id' => '1308'],
            ['ddsa_code' => '130841', 'name' => 'Batu 34+, JALAN SIMANGGANG', 'level' => 1, 'xref_district_id' => '1308'],
            ['ddsa_code' => '130842', 'name' => 'Bandar Serian', 'level' => 2, 'xref_district_id' => '1308'],
            ['ddsa_code' => '130843', 'name' => 'Bandar Tebakang', 'level' => 2, 'xref_district_id' => '1308'],
            ['ddsa_code' => '130844', 'name' => 'Bandar Muara Mongkos', 'level' => 2, 'xref_district_id' => '1308'],
            ['ddsa_code' => '130845', 'name' => 'Bandar Tedebu', 'level' => 2, 'xref_district_id' => '1308'],
            ['ddsa_code' => '130846', 'name' => 'Bandar Balai Ringin', 'level' => 2, 'xref_district_id' => '1308'],
            ['ddsa_code' => '130847', 'name' => 'Bandar Tambirat', 'level' => 2, 'xref_district_id' => '1308'],
            ['ddsa_code' => '130848', 'name' => 'Bandar Muara Tuang', 'level' => 2, 'xref_district_id' => '1308'],
            ['ddsa_code' => '130852', 'name' => 'Bandar Simujan', 'level' => 2, 'xref_district_id' => '1308'],
            ['ddsa_code' => '130853', 'name' => 'Bandar Gedong', 'level' => 2, 'xref_district_id' => '1308'],
            ['ddsa_code' => '130854', 'name' => 'Bandar Sebangan', 'level' => 2, 'xref_district_id' => '1308'],
            ['ddsa_code' => '130865', 'name' => 'Bandar Tebelu', 'level' => 2, 'xref_district_id' => '1308'],
            ['ddsa_code' => '130877', 'name' => 'Bandar Terbat', 'level' => 2, 'xref_district_id' => '1308'],
            /*
             * === BINTULU
             */
            ['ddsa_code' => '130931', 'name' => 'Bintulu', 'level' => 1, 'xref_district_id' => '1309'],
            ['ddsa_code' => '130932', 'name' => 'Kemena', 'level' => 1, 'xref_district_id' => '1309'],
            ['ddsa_code' => '130933', 'name' => 'Sebauh', 'level' => 1, 'xref_district_id' => '1309'],
            ['ddsa_code' => '130934', 'name' => 'Bandar Lanang', 'level' => 2, 'xref_district_id' => '1309'],
            ['ddsa_code' => '130935', 'name' => 'Bandar Pandan', 'level' => 2, 'xref_district_id' => '1309'],
            ['ddsa_code' => '130936', 'name' => 'Bandar Tubau', 'level' => 2, 'xref_district_id' => '1309'],
            ['ddsa_code' => '130938', 'name' => 'Selezu', 'level' => 1, 'xref_district_id' => '1309'],
            ['ddsa_code' => '130939', 'name' => 'Batu Kapal', 'level' => 1, 'xref_district_id' => '1309'],
            ['ddsa_code' => '130940', 'name' => 'Rasan', 'level' => 1, 'xref_district_id' => '1309'],
            ['ddsa_code' => '130941', 'name' => 'Pandan', 'level' => 1, 'xref_district_id' => '1309'],
            ['ddsa_code' => '130942', 'name' => 'Bandar Kuala Tatau', 'level' => 2, 'xref_district_id' => '1309'],
            ['ddsa_code' => '130943', 'name' => 'Bandar Tatau', 'level' => 2, 'xref_district_id' => '1309'],
            ['ddsa_code' => '130945', 'name' => 'Buan Lan', 'level' => 1, 'xref_district_id' => '1309'],
            ['ddsa_code' => '130946', 'name' => 'Sangan', 'level' => 1, 'xref_district_id' => '1309'],
            ['ddsa_code' => '130947', 'name' => 'Anap', 'level' => 1, 'xref_district_id' => '1309'],
            ['ddsa_code' => '130948', 'name' => 'Kakus', 'level' => 1, 'xref_district_id' => '1309'],
            ['ddsa_code' => '130954', 'name' => 'Jelalong', 'level' => 1, 'xref_district_id' => '1309'],
            ['ddsa_code' => '130955', 'name' => 'Binia', 'level' => 1, 'xref_district_id' => '1309'],
            /*
             * === MUKAH
             */
            ['ddsa_code' => '131001', 'name' => '-', 'level' => 1, 'xref_district_id' => '1310'],
            /*
             * === BETONG
             */
            ['ddsa_code' => '131101', 'name' => '-', 'level' => 1, 'xref_district_id' => '1311'],
            ['ddsa_code' => '131146', 'name' => 'Bandar Maludam', 'level' => 2, 'xref_district_id' => '1311'],
        ];

        foreach ($data_seeds as $seed) {
            $seed['xref_district_id'] = $districts[$seed['xref_district_id']];
            XrefSubdistrict::create($seed);
        }
    }

    /**
     * Reverts the database seeder.
     */
    public function down(): void
    {
        // Remove your data
    }
}
