# TODO

- [x] Implement missing route for `activities.updates.store` (wire `ActivityUpdateController@store` in `routes/web.php`).
- [x] Update Livewire `ManageActivities` to write audit-trail rows (`ActivityUpdate`) on create/update (and set `created_by`).

- [ ] Verify migrations/models for `activity_updates` + `Activity` relationships used by `activities/show`.
- [ ] Fix “Save update” UX/validation if remark can be empty (controller requires `remark`).
- [ ] Ensure notifications rendering handles `actor_user_id`/payload consistently.
- [ ] Run `php artisan route:list | grep activities.updates.store` and `php artisan test`.

