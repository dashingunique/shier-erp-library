<?php
/**
 * 十贰进销存系统
 * ==========================================================================
 * @link      https://github.com/dashingunique/shier-erp
 * @license   https://github.com/dashingunique/shier-erp/blob/master/LICENSE.txt License
 * @Desc      验证层
 * ==========================================================================
 * @author    张大宝的程序人生 <1107842285@qq.com>
 */
declare (strict_types = 1);

namespace erp\validate\goods;

use erp\validate\baseValidate;

class goodsCategoryValidate extends baseValidate
{
    /**
     * 定义验证规则
     * 格式：'字段名'	=>	['规则1','规则2'...]
     *
     * @var array
     */	
	protected $rule = [
	    'id|分类信息' => 'require|number|max:20',
        'parent_id|上级分类信息' => 'number|max:20',
        'state|状态' => 'require|number|max:4',
        'name|分类名称' => 'require|max:50|checkUnique',
        'remark|分类备注' => 'max:255',
        'thumb|分类缩略图' => 'max:255',
    ];
}
