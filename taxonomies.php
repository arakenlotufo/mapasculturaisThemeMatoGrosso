<?php
return array(
    1 => array(
        'slug' => 'tag',
        'entities' => array(
            'MapasCulturais\Entities\Space',
            'MapasCulturais\Entities\Agent',
            'MapasCulturais\Entities\Event',
            'MapasCulturais\Entities\Project'
        )
    ),

    2 => array(
        'slug' => 'area',
        'required' => "Você deve informar ao menos uma área de atuação",
        'entities' => array(
            'MapasCulturais\Entities\Space',
            'MapasCulturais\Entities\Agent'
        ),
        'restricted_terms' => array(
            'Antropologia',
            'Arqueologia',
            'Arquitetura-Urbanismo',
            'Arquivo',
            'Arte de Rua',
            'Arte Digital',
            'Artes Sacras',
            'Artes Visuais',
            'Artesanato',
            'Audiovisual',
            'Cinema',
            'Circo',
            'Comunicação',
            'Cultura Cigana',
            'Cultura Digital',
            'Cultura Estrangeira (imigrantes)',
            'Cultura Indígena',
            'Cultura LGBT',
            'Cultura Negra',
            'Cultura Popular',
            'Dança',
            'Design',
            'Direito Autoral',
            'Economia Criativa',
            'Educação',
            'Esporte',
            'Filosofia',
            'Fotografia',
            'Gastronomia',
            'Gestão Cultural',
            'História',
            'Jogos Eletrônicos',
            'Jornalismo',
            'Leitura',
            'Literatura',
            'Livro',
            'Meio Ambiente',
            'Mídias Sociais',
            'Moda',
            'Museu',
            'Música',
            'Novas Mídias',
            'Patrimônio Imaterial',
            'Patrimônio Material',
            'Pesquisa',
            'Produção Cultural',
            'Rádio',
            'Saúde',
            'Sociologia',
            'Teatro',
            'Televisão',
            'Tombado',
        'Turismo',
        'Ciência',
        'Tecnologia',
        'Inovação',
            'Educação Profissional',
        'Desenvolvimento Sustentável',
            'Outros'
        )
    ),

    3 => array(
        'slug' => 'linguagem',
        'required' => "Você deve informar ao menos uma linguagem",
        'entities' => array(
            'MapasCulturais\Entities\Event'
        ),

        'restricted_terms' => array(
            'Artes Circenses',
            'Artes Integradas',
            'Artes Visuais',
            'Audiovisual',
            'Cinema',
            'Cultura Digital',
            'Cultura Indígena',
            'Cultura Tradicional',
            'Curso ou Oficina',
            'Dança',
            'Exposição',
            'Hip Hop',
            'Livro e Literatura',
            'Música Popular',
            'Música Erudita',
            'Palestra, Debate ou Encontro',
            'Rádio',
            'Teatro',
            'Outros'
        )
    )
);
