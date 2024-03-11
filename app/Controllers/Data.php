<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use \CodeIgniter\View\Table;

class Data extends BaseController
{
    public function index()
    {
        $table = new Table();
        $data = [
            ['Name', 'City', 'State'],
            ['noida', 'Noida', 'Up'],
            ['srinagar', 'srinagar', 'j&k'],
            ['pune', 'pune', 'mumbai'],
            ['kerala', 'kerala', 'kerala']

        ];
        $template = [
            'table_open' => '<table border="2" cellpadding="4" cellspacing="2" class="table">',
        
            'thead_open'  => '<thead>',
            'thead_close' => '</thead>',
        
            'heading_row_start'  => '<tr>',
            'heading_row_end'    => '</tr>',
            'heading_cell_start' => '<th>',
            'heading_cell_end'   => '</th>',
        
            'tfoot_open'  => '<tfoot>',
            'tfoot_close' => '</tfoot>',
        
            'footing_row_start'  => '<tr>',
            'footing_row_end'    => '</tr>',
            'footing_cell_start' => '<td>',
            'footing_cell_end'   => '</td>',
        
            'tbody_open'  => '<tbody>',
            'tbody_close' => '</tbody>',
        
            'row_start'  => '<tr>',
            'row_end'    => '</tr>',
            'cell_start' => '<td>',
            'cell_end'   => '</td>',
        
            'row_alt_start'  => '<tr>',
            'row_alt_end'    => '</tr>',
            'cell_alt_start' => '<td>',
            'cell_alt_end'   => '</td>',
        
            'table_close' => '</table>',
        ];
        
        $table->setTemplate($template);
        // echo $table->generate($data);
        $records['users'] =  $table->generate($data);

       echo view('dataview',$records);
    }
}
