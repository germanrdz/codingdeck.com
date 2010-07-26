ALTER TABLE entries ADD COLUMN Comments int default 0;
UPDATE entries SET Comments = (SELECT COUNT(*) FROM comments WHERE EntryId = entries.Id);