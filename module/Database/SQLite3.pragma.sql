/* SQLite3 Configuration */
PRAGMA auto_vacuum               = FULL;
PRAGMA automatic_index           = TRUE;
PRAGMA cache_size                = 2000;
PRAGMA case_sensitive_like       = FALSE;
PRAGMA checkpoint_fullfsync      = FALSE;
PRAGMA encoding                  = "UTF-8";
PRAGMA foreign_keys              = FALSE;
PRAGMA fullfsync                 = FALSE;
PRAGMA ignore_check_constraints  = FALSE;
PRAGMA incremental_vacuum        = 32;
PRAGMA journal_mode              = DELETE;
PRAGMA journal_size_limit        = -1;
PRAGMA legacy_file_format        = TRUE;
PRAGMA locking_mode              = NORMAL;
PRAGMA max_page_count            = 2147483647;
PRAGMA page_size                 = 2048;
PRAGMA parser_trace              = FALSE;
PRAGMA read_uncommitted          = FALSE;
PRAGMA recursive_triggers        = FALSE;
PRAGMA reverse_unordered_selects = FALSE;
PRAGMA secure_delete             = FALSE;
PRAGMA synchronous               = FULL;
PRAGMA temp_store                = DEFAULT;
PRAGMA temp_store_directory      = '/tmp';
PRAGMA vdbe_listing              = FALSE;
PRAGMA vdbe_trace                = FALSE;
PRAGMA wal_autocheckpoint        = 1000;
PRAGMA writable_schema           = FALSE;