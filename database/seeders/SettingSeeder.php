<?php
/**
 * Copyright (c) Since 2024 InnoShop - All Rights Reserved
 *
 * @link       https://www.innoshop.com
 * @author     InnoShop <team@innoshop.com>
 * @license    https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 *
 * Customized for Pavi Creations | Dambulla
 */

namespace Database\Seeders;

use InnoShop\Common\Models\Setting;
use InnoShop\Common\Repositories\SettingRepo;
use Throwable;

class SettingSeeder extends BaseSeeder
{
    /**
     * @return void
     * @throws Throwable
     */
    public function run(): void
    {
        $items = $this->getSettings();
        if ($items) {
            $this->safeTruncate(Setting::class);
            foreach ($items as $item) {
                SettingRepo::getInstance()->updateSystemValue($item['name'], $item['value']);
            }
        }
    }

    /**
     * @return array[]
     */
    private function getSettings(): array
    {
        return [
            ['space' => 'system', 'name' => 'front_logo', 'value' => 'images/logo.png'],
            ['space' => 'system', 'name' => 'panel_logo', 'value' => 'images/logo-panel.svg'],
            ['space' => 'system', 'name' => 'panel_icon_logo', 'value' => 'images/logo-mini.png'],
            ['space' => 'system', 'name' => 'placeholder', 'value' => 'images/placeholder.png'],
            ['space' => 'system', 'name' => 'favicon', 'value' => 'images/favicon.png'],
            ['space' => 'system', 'name' => 'country_code', 'value' => 'LK'],
            ['space' => 'system', 'name' => 'state_code', 'value' => ''],
            ['space' => 'system', 'name' => 'front_locale', 'value' => 'en'],
            ['space' => 'system', 'name' => 'expand', 'value' => '0'],
            ['space' => 'system', 'name' => 'api_docs_enabled', 'value' => '1'],
            ['space' => 'system', 'name' => 'address', 'value' => 'Dambulla, Sri Lanka'],
            ['space' => 'system', 'name' => 'telephone', 'value' => '+94 77 986 2343'],
            ['space' => 'system', 'name' => 'email', 'value' => 'info@pavicreations.lk'],
            ['space' => 'system', 'name' => 'currency', 'value' => 'lkr'],
            ['space' => 'system', 'name' => 'menu_header_categories', 'value' => ['1', '4', '10', '16']],
            ['space' => 'system', 'name' => 'home_categories', 'value' => ['1', '4', '7', '10', '13', '16']],
            ['space' => 'system', 'name' => 'menu_header_pages', 'value' => ['3']],
            ['space' => 'system', 'name' => 'menu_footer_categories', 'value' => ['1', '4', '7']],
            ['space' => 'system', 'name' => 'menu_footer_specials', 'value' => ['products', 'brands']],
            ['space' => 'system', 'name' => 'menu_footer_catalogs', 'value' => ['1', '2']],
            ['space' => 'system', 'name' => 'menu_footer_pages', 'value' => ['1', '2', '3']],
            [
                'space' => 'system',
                'name'  => 'meta_title',
                'value' => [
                    'zh-cn' => 'Pavi Creations | Dambulla - Wholesale & Retail Fashion',
                    'en'    => 'Pavi Creations | Dambulla - Wholesale & Retail Fashion, Clothing & Accessories',
                ],
            ],
            [
                'space' => 'system',
                'name'  => 'meta_keywords',
                'value' => [
                    'zh-cn' => 'Pavi Creations, Dambulla, Fashion, Clothing, Wholesale, Retail',
                    'en'    => 'Pavi Creations, Dambulla, Fashion, Clothing, Wholesale, Retail, Sri Lanka, Hats, Accessories',
                ],
            ],
            [
                'space' => 'system',
                'name'  => 'meta_description',
                'value' => [
                    'zh-cn' => 'Pavi Creations | Dambulla - Your trusted source for wholesale and retail fashion, clothing and accessories in Sri Lanka.',
                    'en'    => 'Pavi Creations | Dambulla - Wholesale & Retail fashion store in Dambulla, Sri Lanka. Quality clothing, hats, accessories and more. Online shopping available.',
                ],
            ],
            [
                'space' => 'system',
                'name'  => 'store_description',
                'value' => [
                    'zh-cn' => 'Pavi Creations is a wholesale and retail fashion store based in Dambulla, Sri Lanka. We offer quality clothing, accessories and more.',
                    'en'    => 'Pavi Creations is a wholesale and retail fashion store based in Dambulla, Sri Lanka. We specialize in quality clothing, hats, accessories and fashion items for online and offline customers.',
                ],
            ],
            [
                'space' => 'system',
                'name'  => 'slideshow',
                'value' => [
                    [
                        'image' => [
                            'en'    => 'images/demo/banner/hero-1.webp',
                            'zh-cn' => 'images/demo/banner/hero-1.webp',
                        ],
                        'title' => [
                            'en'    => 'Welcome to Pavi Creations',
                            'zh-cn' => 'Welcome to Pavi Creations',
                        ],
                        'subtitle' => [
                            'en'    => 'Wholesale & Retail Fashion in Dambulla',
                            'zh-cn' => 'Wholesale & Retail Fashion in Dambulla',
                        ],
                        'link' => '/en/products',
                    ],
                    [
                        'image' => [
                            'en'    => 'images/demo/banner/hero-2.webp',
                            'zh-cn' => 'images/demo/banner/hero-2.webp',
                        ],
                        'title' => [
                            'en'    => 'New Arrivals',
                            'zh-cn' => 'New Arrivals',
                        ],
                        'subtitle' => [
                            'en'    => 'Discover the latest fashion trends',
                            'zh-cn' => 'Discover the latest fashion trends',
                        ],
                        'link' => '/en/products',
                    ],
                ],
            ],
            [
                'space' => 'system',
                'name'  => 'ai_prompt_article_seo_description',
                'value' => '请根据关键字为该文章生成一个优化的文章SEO描述。',
            ],
            [
                'space' => 'system',
                'name'  => 'ai_prompt_article_seo_keywords',
                'value' => '请根据关键字为该文章生成一个优化的文章SEO关键词。',
            ],
            [
                'space' => 'system',
                'name'  => 'ai_prompt_article_seo_title',
                'value' => '请根据关键字为该文章生成一个有效的文章SEO标题。',
            ],
            [
                'space' => 'system',
                'name'  => 'ai_prompt_article_slug',
                'value' => '请根据关键字为该文章生成一个简洁、明确的文章slug。',
            ],
            [
                'space' => 'system',
                'name'  => 'ai_prompt_article_summary',
                'value' => '请根据关键字为该文章撰写一份简洁而引人注目的产品摘要。',
            ],
            [
                'space' => 'system',
                'name'  => 'ai_prompt_article_content',
                'value' => '请根据以下文章信息生成正文内容。要求：仅输出可直接粘贴到富文本编辑器的 HTML 片段（如 h2/h3 标题、段落、无序列表、加粗文本、引用、图片占位等）；禁止输出 <!DOCTYPE>、<html>、<head>、<body> 等文档级标签；禁止用 Markdown 代码块包裹；禁止添加任何解释性文字。',
            ],
            [
                'space' => 'system',
                'name'  => 'ai_prompt_category_content',
                'value' => '请根据以下分类信息生成分类描述内容。要求：仅输出可直接粘贴到富文本编辑器的 HTML 片段（如 h2/h3 标题、段落、无序列表、加粗文本等）；禁止输出 <!DOCTYPE>、<html>、<head>、<body> 等文档级标签；禁止用 Markdown 代码块包裹；禁止添加任何解释性文字。',
            ],
            [
                'space' => 'system',
                'name'  => 'ai_prompt_brand_content',
                'value' => '请根据以下品牌信息生成品牌描述内容。要求：仅输出可直接粘贴到富文本编辑器的 HTML 片段（如 h2/h3 标题、段落、无序列表、加粗文本等）；禁止输出 <!DOCTYPE>、<html>、<head>、<body> 等文档级标签；禁止用 Markdown 代码块包裹；禁止添加任何解释性文字。',
            ],
            [
                'space' => 'system',
                'name'  => 'ai_prompt_page_content',
                'value' => '请根据以下页面信息生成单页正文内容。要求：仅输出可直接粘贴到富文本编辑器的 HTML 片段（如 h2/h3 标题、段落、无序列表、加粗文本等）；禁止输出 <!DOCTYPE>、<html>、<head>、<body> 等文档级标签；禁止用 Markdown 代码块包裹；禁止添加任何解释性文字。',
            ],
            [
                'space' => 'system',
                'name'  => 'ai_prompt_product_selling_point',
                'value' => '请为该商品生成一份简洁有力的产品卖点描述。请突出产品的核心优势和独特功能，明确其与竞争产品的不同之处。描述应能引发目标用户的兴趣，强调产品如何为他们带来特定好处或解决问题。语言应具有吸引力，并能清晰传达产品的价值和使用场景，请用1.2.3.....段落形式输出方便用快速阅读，并加上适当的表情\'',
            ],
            [
                'space' => 'system',
                'name'  => 'ai_prompt_product_content',
                'value' => '请根据以下商品信息生成若干段商品描述片段。要求：仅输出可直接粘贴到富文本编辑器的 HTML 片段（如 h2/h3 标题、段落、无序列表、加粗文本等）；禁止输出 <!DOCTYPE>、<html>、<head>、<body> 等文档级标签；禁止用 Markdown 代码块包裹；禁止添加任何解释性文字。',
            ],
            [
                'space' => 'system',
                'name'  => 'ai_prompt_product_seo_description',
                'value' => '请为该商品生成一个优化的产品SEO描述。描述应包含主要关键词，概述产品的核心功能和优势，并吸引潜在客户点击。请确保描述简洁且具吸引力，能够清楚传达产品的价值主张，并符合搜索引擎的最佳实践。字数应控制在150-160个字符之间，以确保在搜索引擎结果页上完整显示。',
            ],
            [
                'space' => 'system',
                'name'  => 'ai_prompt_product_seo_keywords',
                'value' => '请为该商品生成一个优化的产品SEO关键词。应包含主要关键词，概述产品的核心功能和优势，并吸引潜在客户点击。请确保描述简洁且具吸引力，能够清楚传达产品的价值主张，并符合搜索引擎的最佳实践。字数应控制在150-160个字符之间，以确保在搜索引擎结果页上完整显示。',
            ],
            [
                'space' => 'system',
                'name'  => 'ai_prompt_product_seo_title',
                'value' => '请为该商品生成一个有效的产品SEO标题。标题应包含主要的关键词，以优化搜索引擎排名，并且吸引潜在客户的注意。请确保标题简洁且描述性强，突出产品的核心优势和独特之处，同时与用户的搜索意图紧密相关。标题字数应控制在60个字符以内，以便在搜索引擎结果页上完整显示。',
            ],
            [
                'space' => 'system',
                'name'  => 'ai_prompt_product_slug',
                'value' => '请为该商品生成一个简洁、明确的产品slug。slug应简短且易于记忆，包含产品的主要关键词，以便于搜索引擎优化（SEO）和用户识别。请确保slug使用小写字母、连字符连接关键词，并避免使用特殊字符。slug应能够在简洁的同时准确传达产品名称或类型，使用户能够一目了然地理解产品的核心特征。',
            ],
            [
                'space' => 'system',
                'name'  => 'ai_prompt_product_summary',
                'value' => '请为该商品撰写一份简洁而引人注目的产品摘要。摘要应突出产品的核心功能、主要特点和独特卖点，根据目标用户，并且能够激发他们的购买欲望。请确保摘要语言简洁明了，同时能清楚地传达产品的价值和优势。输出为1-2句吸引用户的精炼内容。',
            ],
        ];
    }
}
