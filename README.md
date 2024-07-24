# Sistema eConfea

## Descrição

O sistema **eConfea** foi desenvolvido com o objetivo de aumentar a eficiência e centralizar as informações do sistema CONFEA/CREA. Enfrentamos desafios significativos na gestão de registros profissionais e na emissão de vistos para atuação em outros Estados como responsáveis técnicos. Nossa proposta é unificar todos os registros profissionais e facilitar a emissão de Anotações de Responsabilidade Técnica (ART) e vistos.

## Funcionalidades

- **Unificação de Registros:** Centralização de todos os registros profissionais em um único sistema.
- **Emissão de ART e Vistos:** Facilitação do processo de emissão, com suporte de inteligência artificial para maior precisão e eficiência.
- **Segurança:** Implementação de autenticação para acesso, criptografia de dados em trânsito e em repouso, em conformidade com a Lei Geral de Proteção de Dados (LGPD).
- **Conformidade:** Alinhamento com as normas do CONFEA e dos CREAs, incluindo a Resolução n. 1.025 de 2009.

## Benefícios

- **Modernização e Unificação:** Melhoria nos processos do CONFEA e dos CREAs, reduzindo a burocracia e melhorando a comunicação entre os órgãos.
- **Qualidade dos Dados:** Aumento da transparência e da qualidade dos dados registrados.
- **Redução da Burocracia:** Diminuição dos trâmites administrativos e facilitação da comunicação.
- **Fiscalização com Inteligência Artificial:** Aproveitamento da centralização dos dados para implementar ferramentas de inteligência artificial que promovem uma fiscalização mais eficiente e assertiva.

# Configuração e Instalação do Laravel

Este guia fornece instruções para configurar e instalar um projeto Laravel localmente.

## Requisitos

Antes de começar, certifique-se de que você tem os seguintes requisitos instalados:

- [PHP](https://www.php.net/) (>= 8.2)
- [Composer](https://getcomposer.org/) (Gerenciador de dependências PHP)
- [MySQL](https://www.mysql.com/) ou outro banco de dados compatível
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension

## Passos para Instalação

1. **Clone o Repositório**

   Primeiro, clone o repositório do projeto:

   ```bash
   git clone https://github.com/xxggabriel/hackathon-crea
    ```

## Para rodar este projeto
```bash
$ git clone https://github.com/xxggabriel/hackathon-crea
$ cd hackathon-crea
$ composer install
$ cp .env.example .env
$ php artisan key:generate
$ php artisan migrate #antes de rodar este comando verifique sua configuracao com banco em .env
$ php artisan serve

```
Acesssar pela url: http://localhost:8000


## Licença

Este projeto está licenciado sob a [Licença MIT](LICENSE).

## Contato

Para mais informações, entre em contato com [gabrielsouza2@discente.ufg.br](mailto:gabrielsouza2@discente.ufg.br).
